<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'is_valid'
    );

    public function songs()
    {
        return $this->belongsToMany('App\\Song')->withTimestamps(); //, 'user_id');
    }
}
