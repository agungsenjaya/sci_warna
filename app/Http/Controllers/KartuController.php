<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kartu;
use Validator;
use Session;

class KartuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kartu.index')->with('kartu', Kartu::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kartu.create');
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
            'judul' => 'required|max:255|unique:kartus',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Ada yang salah, coba periksa kembali');
            return redirect()->back();
        }else {

            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/gallery', $img_new);

            $pdf = $request->pdf;
            $pdf_new = time().$pdf->getClientOriginalName();
            $pdf->move('img/pdf', $pdf_new);

            $data = Kartu::create([
                'judul' => $request->judul,
                'img' => 'img/gallery/'.$img_new,
                'pdf' => 'img/pdf/'.$pdf_new,
                'slug'  => str_slug($request->judul),
            ]);
            Session::flash('success', 'Session create berhasil');
            return redirect()->route('index.kartu');
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
        $data = Kartu::where('id', $id)->first();
        return view('admin.kartu.edit',compact('data'));
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
        $data = Kartu::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Ada yang salah, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/products', $img_new);
                $data->img = 'img/products/' . $img_new;
            }
            if ($request->hasFile('pdf')) {
                $pdf = $request->pdf;
                $pdf_new = time(). $pdf->getClientOriginalName();
                $pdf->move('img/pdf', $pdf_new);
                $data->pdf = 'img/pdf/' . $pdf_new;
            }
            $data->judul = $request->judul;
            $data->slug = str_slug($request->judul);
            $data->save();
            Session::flash('success', 'Session update berhasil');
            return redirect()->route('index.kartu');
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
        $data = Kartu::findOrFail('id',$id);
        $data->delete();
        Session::flash('success', 'Delete session berhasil');
        return redirect()->back();
    }
}
