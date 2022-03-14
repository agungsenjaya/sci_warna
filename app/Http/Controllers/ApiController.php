<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Dingo\Api\Routing\Helpers;

use App\Warna;
use App\Kartu;
use App\Product;
use App\Fors;
use App\Kategori;
use App\Inspirasi;

class ApiController extends Controller
{
    public function warnas(){
        return Warna::all();
    }
    public function products(){
        return Product::all();
    }
    public function productShow($id){
        $data= Product::where('produk_id', $id)->firstOrFail();
        return $data;
    }
    public function productShowSlug($slug){
        $data= Product::where('slug', $slug)->firstOrFail();
        return $data;
    }
    public function fors(){
        return Fors::all();
    }
    public function kateogris(){
        return Kategori::all();
    }

    public function kartu(){
        return Kartu::all();
    }

    public function inspirasis(){
        return Inspirasi::all();
    }
}
