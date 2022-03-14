<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trend;
use App\Kartu;
use App\Product;

class SitemapController extends Controller
{
    public function index(){
        $post = Trend::orderBy('updated_at', 'DESC')->first();
        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }
    public function trends(){
        $posts = Trend::all();
        return response()->view('sitemap.trend', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
    
    public function kartus(){
        $posts = Kartu::all();
        return response()->view('sitemap.kartu', [
            'postss' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
    
    public function warnas(){
        $posts = Product::all();
        return response()->view('sitemap.warna', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}
