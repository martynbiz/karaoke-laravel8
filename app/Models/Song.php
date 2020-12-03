<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\GetMetaByName;

class Song extends Model
{
    use GetMetaByName;

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'path',
        'artist_id',
        'has_meta',
        'language_id',
    );

    public function artist()
    {
        return $this->belongsTo('App\\Artist'); //, 'user_id');
    }

    public function language()
    {
        return $this->belongsTo('App\\Language'); //, 'user_id');
    }

    public function meta()
    {
        return $this->hasMany('App\\SongsMeta'); //, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\\Tag')->withTimestamps(); //, 'user_id');
    }

    public function playlists()
    {
        return $this->belongsToMany('App\\Playlist')->withTimestamps();;
    }
}
