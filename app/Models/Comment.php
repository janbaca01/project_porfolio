<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The attributes that are mass assingnable.
     */
    protected $fillable = [
        'text', 'post_id'
    ];

    /**
     * Get the author of the comment
     */

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get post this comment belongs to 
     */    
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    use HasFactory;
}
