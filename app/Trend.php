<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
    protected $fillable = ['judul','img','year','slug','konten'];
    public function imgAttribute($img){
        return asset($img);
    }
}
