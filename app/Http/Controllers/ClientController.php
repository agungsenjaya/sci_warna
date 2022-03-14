<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warna;
use App\Kartu;
use App\Product;
use App\Trend;
use App\Fors;
use App\Simulasi;
use App\Inspirasi;
use DB;
use PDF;
use Carbon;
use Mail;
use Session,Redirect;

class ClientController extends Controller
{
    public function home(){
        $oo = DB::table('warnas')->groupBy('for_id')->get();
        $aa = DB::table('products')->groupBy('brand_id')->get();
        return view('client.home',compact('oo','aa'))->with('for', Fors::all());
    }
    public function palet(){
        $oo = DB::table('warnas')->groupBy('for_id')->get();
        $aa = DB::table('products')->groupBy('brand_id')->get();
        return view('client.warna',compact('oo','aa'))->with('for', Fors::all());
    }
    public function palet_a($a){
        $data = Product::where('slug', $a)->first();
        $data1 = Warna::where('kate_id', $data->kate_id)->paginate(32);
        $data2 = Warna::where('kate_id', $data->kate_id)->get();
        return view('client.warna_a',compact('data','data1','data2'));
    }
    public function palet_b($a,$b){
        $data = Product::where('slug', $a)->first();
        $data1 = Warna::where('slug', $b)->first();
        $data2 = Warna::where('kate_id', $data1->kate_id)->get();

        $a = \File::allFiles(public_path('img/simulasi/'));
		$b = \File::allFiles(public_path('img/simulasi/'));
        
        if ($data && $data1) {
            return view('client.warna_b',compact('data','data1','data2','a','b'))->with('warna', Warna::all());
        }else{
            return redirect()->to('404');
        }
    }
    public function kartu(){
        return view('client.kartu')->with('kartu', Kartu::latest()->paginate(4))->with('kartuu', Kartu::all());
    }
    public function gallery(){
        return view('client.gallery')->with('gallery', Inspirasi::latest()->paginate(8))->with('produk', Product::all())->with('warna', Warna::all());
    }
    public function tren(){
        $data2 = Warna::where('kate_id', 2)->get();
        return view('client.tren',compact('data2'))->with('tren', Trend::all());
    }
    public function tren_view($slug){
        // $data2 = Trend::where('id',$id)->first();
        $data2 = Trend::where('slug',$slug)->first();
        return view('client.tren_view',compact('data2'));
    }
    public function simulasi(){
        // return view('client.simulasi');
        return redirect()->to('404');
    }
    public function simulasi_send(Request $request)
	{
		$this->validate($request,[
        'email' => 'required'
      ]);

      $data = new Simulasi;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->nomor = $request->nomor;
      $data->save();

      $arr = array(
        'name' => $request->name,
        'email' => $request->email,
        'nomor' => $request->nomor,
         );

    //   $files = $request->file('files');
      $files1 = $request->file('files1');
      $files2 = $request->file('files2');
      $files3 = $request->file('files3');

    //  $data = $request->only('name','email','nomor','files','msg');
     $data = $request->only('name','email','nomor','files1','files2','files3','msg');
      Mail::send('client.simulasi_mail', $data, function($message) use($arr, $files1, $files2, $files3) {
         $message->to('agung_senjay4@yahoo.com')->subject('Simulasi Warna');
         // $message->cc(['kayaraiya@gmail.com','design@sci-paint.com']);
         $message->from($arr['email'],$arr['name']);
        //  if (count($files > 0)) {
        //    foreach ($files as $file) {
        //      $message->attach($file->getRealPath(), array(
        //       'as' => $file->getClientOriginalName(),
        //       'mime'  => $file->getMimeType())
        //    );
        //    }
        //  }

        if ($files1) {
                 $message->attach($files1->getRealPath(), array(
                  'as' => $files1->getClientOriginalName(),
                  'mime'  => $files1->getMimeType())
               );
             }
        
             if ($files2) {
                 $message->attach($files2->getRealPath(), array(
                  'as' => $files2->getClientOriginalName(),
                  'mime'  => $files2->getMimeType())
               );
             }
        
             if ($files3) {
                 $message->attach($files3->getRealPath(), array(
                  'as' => $files3->getClientOriginalName(),
                  'mime'  => $files3->getMimeType())
               );
             }

      });
      // alert()->success('Berhasil mengirim email', 'Terima kasih.');
      Session::flash('success', 'Simulasi berhasil terkirim');
      return redirect()->back();
	}
}
