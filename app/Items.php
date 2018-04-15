<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
 public function items()
    {
        return $this->belongsTo('App\Category');
    }

    protected $fillable = [
        'name_ar',
        'name_en',
        'price',
        'description',
        'img',
        'cate_id',
    ];
}
