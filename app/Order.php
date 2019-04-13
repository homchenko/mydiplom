<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'title',
        'qtu',
        'item_price',
        'price'
    ];
    public $timestamps = false;
}
