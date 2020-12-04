<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistsMeta extends Model
{
    /**
     * @var string
     */
    protected $table = 'artists_meta';

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'value',
        'artist_id',
    );

    public function songs()
    {
        return $this->belongsToMany('App\\Models\\Song')->withTimestamps(); //, 'user_id');
    }
}
