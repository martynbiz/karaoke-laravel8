<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\GetMetaByName;

class Artist extends Model
{
    use GetMetaByName;

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'has_meta',
    );

    public function songs()
    {
        return $this->hasMany('App\\Song');
    }

    public function albums()
    {
        return $this->hasMany('App\\Album');
    }

    public function meta()
    {
        return $this->hasMany('App\\ArtistsMeta');
    }

    public function tags()
    {
        return $this->belongsToMany('App\\Tag')->withTimestamps();
    }
}
