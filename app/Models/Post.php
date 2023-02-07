<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the route key for model
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     *  Get the author of the post
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    /**
     * Get the comments of this post
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->latest();
    }

    use HasFactory;
}
