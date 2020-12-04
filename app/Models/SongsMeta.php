<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongsMeta extends Model
{
    /**
     * @var string
     */
    protected $table = 'songs_meta';

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'value',
        'song_id',
    );

    public function songs()
    {
        return $this->belongsToMany('App\\Models\\Song')->withTimestamps(); //, 'user_id');
    }
}
