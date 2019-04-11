<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug', 
        'title', 
        'image', 
        'category_id',
        'price', 
        'fat',
        'filter', 
        'excerpt'
    ];
}