<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['judul','kate_id','produk_id','brand_id','ktt','slug'];
    public function warnas()
    {
    	return $this->hasMany('App\Warna');
    }
    public function inspirasi()
    {
    	return $this->hasMany('App\Inspirasi');
    }
}
