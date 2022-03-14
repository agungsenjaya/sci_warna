<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inspirasi;
use App\Warna;
use App\Product;
use Validator, DB, Session;

class InspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inspirasi.index')->with('inspirasi', Inspirasi::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inspirasi.create')->with('warna', Warna::all())->with('produk', Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $als = Product::where('id', $request->product_id)->first();
        $input = $request->all();
        $validator = Validator::make($request->all(), [
            'img' => 'required',
            'product_id' => 'required',
            'warna_id' => 'required|array',
            ]);
        if ($validator->fails()) {
                Session::flash('failed', 'Ada yang salah');
                // return redirect()->back();
                return redirect()->back()->withErrors($validator);
            }else{ 
                $array = $request->warna_id;
               $img = $request->img;
                $img_new = time().$img->getClientOriginalName();
                $img->move('img/inspirasi', $img_new);

                $data = Inspirasi::create([
                    'img' => 'img/inspirasi/' . $img_new,
                    'brand_id' => $als->brand_id,
                    'warna_id' => json_encode($input['warna_id']),
                    'product_id' => $request->product_id,
                ]);
                Session::flash('success', 'Berhasil dimasukan database');
                return redirect()->back(); 
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
        $data = Inspirasi::where('id', $id)->first();
        return view('admin.inspirasi.edit',compact('data'));
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
