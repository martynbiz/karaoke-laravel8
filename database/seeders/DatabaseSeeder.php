<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(SongTagTableSeeder::class);
        $this->call(ArtistTagTableSeeder::class);
        $this->call(SongsMetaTableSeeder::class);
        $this->call(ArtistsMetaTableSeeder::class);
    }
}
