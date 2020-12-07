<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\GetMetaByName;

class Song extends Model
{
    use GetMetaByName, HasFactory;

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
        return $this->belongsTo('App\\Models\\Artist'); //, 'user_id');
    }

    public function language()
    {
        return $this->belongsTo('App\\Models\\Language'); //, 'user_id');
    }

    public function meta()
    {
        return $this->hasMany('App\\Models\\SongsMeta'); //, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\\Models\\Tag')->withTimestamps(); //, 'user_id');
    }

    public function playlists()
    {
        return $this->belongsToMany('App\\Models\\Playlist')->withTimestamps();;
    }
}
