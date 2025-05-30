<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta_description',
        'meta_keywords',
        'icon',
        'status',
    ];
}
