<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
    );

    public function songs()
    {
        return $this->belongsToMany('App\\Models\\Song')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\\Models\\User'); //, 'user_id');
    }
}
