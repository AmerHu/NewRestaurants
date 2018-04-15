<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'price',
        'description',
        'img',
        'sub_item'
    ];
}
