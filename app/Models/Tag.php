<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    /**
    * @var array
    */
    protected $fillable = array(
        'name',
        'is_valid'
    );

    public function songs()
    {
        return $this->belongsToMany('App\\Models\\Song')->withTimestamps(); //, 'user_id');
    }
}
