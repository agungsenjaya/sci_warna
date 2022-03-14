<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspirasi extends Model
{
    protected $fillable = ['warna_id','product_id','img','brand_id'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
