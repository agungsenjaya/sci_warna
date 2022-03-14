<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warna;
use App\Product;
use App\Kartu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('warna', Warna::all())->with('produk', Product::all())->with('kartu', Kartu::all());
    }
}
