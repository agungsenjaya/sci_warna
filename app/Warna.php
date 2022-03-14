<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    // protected $fillable = ['judul','brand_id','kode','rgb','kategori_id','for_id','slug'];
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
    public function for(){
        return $this->belongsTo('App\Fors');
    }
    public function product(){
        return $this->belongsTo('App\Products');
    }
}
