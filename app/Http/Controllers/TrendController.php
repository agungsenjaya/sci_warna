<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trend;
use Validator, DB, Session;

class TrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trend.index')->with('trend', Trend::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trend.create')->with('trend', Trend::all());
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
            'judul' => 'required|max:255|unique:trends',
            'img' => 'required',
            'year' => 'required|max:255|unique:trends'
            ]);
            if ($validator->fails()) {
                Session::flash('failed', 'Ada yang salah');
                // return redirect()->back();
                return redirect()->back()->withErrors($validator);
            }else{ 
                
                $img = $request->img;
                $img_new = time().$img->getClientOriginalName();
                $img->move('img/trend', $img_new);

                $data = Trend::create([
                    'judul' => $request->judul,
                    'img' => 'img/trend/' . $img_new,
                    'year' => $request->year,
                    'slug' => str_slug($request->judul),
                    'konten' => $request->konten,
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
        $data = Trend::where('id', $id)->first();
        // dd($ads);
        return view('admin.trend.edit',compact('data'));
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
        $data = Trend::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'konten' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Ada yang salah, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/trend', $img_new);
                $data->img = 'img/trend/' . $img_new;
            }
           
            $data->judul = $request->judul;
            $data->konten = $request->konten;
            $data->year = $request->year;
            $data->slug = str_slug($request->judul);
            $data->save();
            Session::flash('success', 'Produk berhasil di update');
            return redirect()->route('index.trend');
        }
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
