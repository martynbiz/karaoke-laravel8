# Karaoke

...

sly stone 
big theif 
cohen 
bjork 
dionne warwick
cilla black 
pewdiepie


TODO 
- admin section: update songs meta data ui, display network info e.g. ip address, 

Raspberry pi 
- install nginx, php, app on raspberry pi
- configure pi 
- connect to tv, start up pi, instructions to connect console. 

## Prerequisities

Virtualbox - apt install virtualbox
Vagrant ^2.2.6
https://www.vagrantup.com/downloads.html, not apt-get as version too low for Homestead

Apache
PHP
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04

Composer
https://getcomposer.org/download/

PHP extensions
- php-mbstring
- php-dom

Karaoke videos are in /public/media/{lang}/{artist}/{song}

Homestead wil be required (e.g. ~/Homestead) to manage the VMs.

net-tools (ifconfig) for debugging network issues.

If doing reverse proxy, then:
- a2enmod proxy
- a2enmod proxy_http

## Installation

```
git clone ...karaoke-laravel5
cd karaoke-laravel5/
composer install
```

OR with Laradock

@See https://sam-ngu.medium.com/laradock-quick-start-laravel-docker-tutorial-d1bbb7796a7

```
docker run --rm -v ${pwd}:/app composer install
```

```
$ cd laradock 
$ docker-compose up -d nginx mysql
```

==

```
https://laradock.io/documentation/#run-artisan-commands
```

Homestead is used to run all laravel projects on a single VM rather than multiple VMs. https://scotch.io/tutorials/getting-started-with-laravel-homestead

```
$ cd karaoke-laravel5/
$ php artisan key:generate
$ cp .env.example .env
```

Vagrant is used to start the VM which is where we'll run the app from:

```
$ cd ~/Homestead
$ vagrant up
$ vagrant ssh
```

Run the migrations to generate tables:

```
$ php artisan migrate
```

If seeders exist, run the them:

```
$ php artisan db:seed
```

Register a new user at http://192.168.10.10/register. The player should be running
from http://192.168.10.10/player. Next we'll setup the other device (e.g. tablet)
for the /console.

==

If generating data for first time, run the following to fetch song data:

```
$ php artisan karaoke:songs:update
```

As the update takes about 10 minutes, it is worth generating seeders:

```
$ php artisan iseed artists_meta,artists,languages,songs_meta,songs,tags,artist_tag,song_tag
```

Once you have written your seeder, you may need to regenerate Composer's autoloader using
the dump-autoload command (unless iseed does this already?):

```
$ composer dump-autoload
```

==

Additional steps

Allow laptop lid to close when connected to another screen (e.g. TV). Or, set the other screen to
the primary screen and use that one only.

Disable sleep mode when inactive otherwise you'll be constantly putting in your password.

## Vagrant/ port forwarding setup

EASY WAY: Homestead will map to port 8000, test from host e.g. 192.168.10.1:8000/console. Might to allow incoming traffic on that port e.g. sudo ufw allow 8000.

OR, reverse proxy...

To allow another device such as a tablet to access /console, below is how to configure
Apache on the host machine to direct incoming traffic to the VM's network IP address (as
defined in Homestead.yaml):

/etc/apache2/sites-available/karaoke.conf

```
<VirtualHost *:8088>
    ProxyPreserveHost On
    ServerName mydomain.com
    ServerAlias www.mydomain.com
    ProxyPass "/" "192.168.10.10/"
    ProxyPassReverse "/" "192.168.10.10/"
</VirtualHost>
```

OR this one?

```
<VirtualHost *:8089>
    ProxyPreserveHost On
    ProxyPass        "/" "192.168.10.10/"
    ProxyPassReverse "/" "192.168.10.10/"
    ServerName hostname.example.com
</VirtualHost>
```

Now other devices on the network can access the console at http://<Host IP address>:8088/console

## Connect with device on embedded console

This is easy as it's the same app. Determine the host (player) IP with `ifconfig`.
Use that IP from the browser of the tablet with the 8000/8088 port.
You may need to provide firewall access e.g. `ufw allow 8000`

## Allowing third-party access SPA console (e.g. React console app)

Create a user at /register for the third-party.

Create an API client linked to that user:

```
$ php artisan passport:client
```

## Transalations

langman

## Troubleshooting

Cannot connect console device over network

From the host machine, run `ifconfig` and confirm that the IP address has been entered
correctly from the console device. Test IP address and port (e.g. http://192.168.10.1:8088)
fro the host machine first and confirm that the console 



=== Old ===

## KVM/ iptables setup (incomplete)

Problem: Sharing media directory?? Probably best to create a Samba share if possible

This method is where the app is running on a guest VM within KVM. Iptables is configured
to forward any incoming traffic (e.g. tablet) on a given port to the guest IP address.

First, install KVM - https://www.ostechnix.com/setup-headless-virtualization-server-using-kvm-ubuntu/

Share media directory between host and guest VM - http://rabexc.org/posts/p9-setup-in-libvirt

```
ssh ...
cd /var/www
mkdir karaoke-l5
chown user:user karaoke-l5
git clone ... karaoke-l5
cd karaoke-l5
composer install
```

The deployed site should be accessible from the host machine as this will be the video player.

Below is the virtualhost file for the VM:

```
NameVirtualHost *:8080
Listen 8080

<VirtualHost *:8080>
    ServerAdmin admin@example.com
    ServerName karaoke-l5.clara
    ServerAlias www.karaoke-l5.clara
    DocumentRoot /var/www/karaoke-l5/public

    <Directory /var/www/karaoke-l5/public/>
            Options Indexes FollowSymLinks MultiViews
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
    </Directory>

    LogLevel debug
    ErrorLog ${APACHE_LOG_DIR}/karaoke-l5-error.log
    CustomLog ${APACHE_LOG_DIR}/karaoke-l5-access.log combined
</VirtualHost>
```

```
$ a2ensite karaoke-l5.conf
```

Ensure apache mod rewrites are enabled:

```
$ a2enmod rewrite
```

Set database:

```
CREATE DATABASE karaoke_l5;
GRANT ALL PRIVILEGES ON *.* TO 'karaoke_l5_user'@'localhost' IDENTIFIED BY 'p455word';
```

Create .env file with the above credentials.

```
$ cp .env.example .env
$ vim .env
```

Run migrations with seeds:

```
$ php artisan migrate --seed
```

Generate key:

```
$ php artisan key:generate
```

Set permissions on folders:

```
$ sudo chgrp www-data storage/logs/
$ sudo chgrp www-data storage/framework/
$ sudo chgrp -R www-data storage bootstrap/cache
$ sudo chmod -R ug+rwx storage bootstrap/cache
```














TODO

- console playlist auto update when songs are deleted from player
- add in messages, errors in layout
- testing
- flash messages -
- testing: https://laravel.com/docs/5.6/testing
- https://github.com/barryvdh/laravel-debugbar
- migrations: what's wrong with foreign keys?

- split up assets: console.css, player.css, etc
- manage users - https://github.com/jeremykenedy/laravel-users
- include $(document).foundation()
- https://github.com/barryvdh/laravel-debugbar
- migrations: what's wrong with foreign keys?
- use form helpers, add blade syntax
- roles?
- when nothing playing, play cheesy adverts

Laravel passports
- add list clients, edit, delete to cli tool


bug: if the same song is on the playlist many times, does deleting one delete them all? shouldn't do


https://mattstauffer.com/blog/advanced-input-output-with-artisan-commands-tables-and-progress-bars-in-laravel-5.1/

create a shared folder in virtualbox - https://www.youtube.com/watch?v=DVoX-Hq_Qk4
