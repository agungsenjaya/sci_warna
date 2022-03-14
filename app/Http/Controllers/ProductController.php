<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warna;
use App\Fors;
use App\Kategori;
use App\Product;
use DB,Validator,Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ids = 0;
        // $fins = DB::table('warnas')->where('kate_id', '=', $ids)->get();
        return view('admin.produk.index')->with('produk', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oo = DB::table('warnas')->groupBy('kate_id')->get();
        // $oo = DB::table('warnas')
        //         ->select('brand_id')
        //         ->groupByRaw('brand_id')
        //         ->get();
        return view('admin.produk.create',compact('oo'))->with('warna', Warna::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255|unique:products',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $data = Product::create([
                'judul' => $request->judul,
                'kate_id' => $request->kate_id,
                'produk_id' => $request->produk_id,
                'brand_id' => $request->brand_id,
                'ktt' => $request->ktt,
                'slug' => str_slug($request->judul),
            ]);
            Session::flash('success','Session tambah berhasil');
            return redirect()->route('index.produk');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
