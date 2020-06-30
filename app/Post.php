<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillables here
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug'
    ];
}
