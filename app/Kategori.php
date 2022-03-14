<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // protected $fillable = ['judul','slug'];
    public function warnas()
    {
    	return $this->hasMany('App\Warna');
    }
}
