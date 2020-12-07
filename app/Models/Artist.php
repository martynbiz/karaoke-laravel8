<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\GetMetaByName;

class Artist extends Model
{
    use GetMetaByName, HasFactory;

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'has_meta',
    );

    public function songs()
    {
        return $this->hasMany('App\\Models\\Song');
    }

    public function albums()
    {
        return $this->hasMany('App\\Models\\Album');
    }

    public function meta()
    {
        return $this->hasMany('App\\Models\\ArtistsMeta');
    }

    public function tags()
    {
        return $this->belongsToMany('App\\Models\\Tag')->withTimestamps();
    }
}
