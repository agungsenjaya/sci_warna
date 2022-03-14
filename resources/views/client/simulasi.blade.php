@extends('index') 
@section('content') 

<div class="py-3 bg-dark over-x z-in-1">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
			<div class="mr-3"><a class="text-white" href="/">warna</a>
			</div>
			<div class="mr-3"><a class="text-white" href="{{ route('palet') }}">palet warna</a>
			</div>
			<div class="mr-3"><a class="text-white" href="{{ route('kartu.warna') }}">kartu warna</a>
			</div>
			<div class="mr-3"><a class="text-white" href="{{ route('simulasi.warna') }}">simulasi warna</a>
			</div>
			<div class="mr-3"><a class="text-white" href="{{ route('tren.warna') }}">tren warna</a>
			</div>
		</div>
	</div>
</div>
<section>
  <div class="images">
    <img src="{{ asset('img/w2.jpg') }}" alt="" width="100%" class="d-none d-sm-block">
    <img src="{{ asset('img/w3.jpg') }}" alt="" width="100%" class="d-sm-none d-block">
    <div class="grad-hero"></div>
    <div class="position-absolute z-in-1" style="top:0;right:0;left:0;bottom:0;">
    <div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
    <div class="text-white">
    <h2 class="text-capitalize display-4 title-2 mb-0">Simulasi Warna</h2>
    <p class="title-1 lead">Cara baik untuk memilih warna rumah <span class="d-none d-sm-block"></span> untuk pelanggan sci paint.</p>
    <a href="javascript:void(0)" class="start btn btn-primary rounded-pill">Mulai simulasi</a>
    </div>
    </div>
    </div>
  </div>
  </section>
  <section class="space-m" id="start">
  <div class="container">
  <div class="text-center lead">
  <p class="title-1 mb-0">Berikut tiga cara mudah untuk konsultasi warna rumah bersama sci paint. </p>
  <a href="javascript:void(0)" data-toggle="modal" data-target="#srt"><u>Syarat & ketentuan</u></a>
  </div>
  <br>
  <div class="card-deck">
  <div class="card">
    <div class="media p-4">
    <i class="fa fa-camera fa-3x mr-4 text-primary"></i>
    <div class="media-body">
      <h5 class="card-title title-2">Foto Rumah</h5>
      <p class="card-text text-secondary">Silahkan foto bagian dinding rumah Anda yang akan di simulasikan. Menggunakan Camera/Handphone.</p>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="media p-4">
    <i class="fa fa-paper-plane fa-3x mr-4 text-primary"></i>
    <div class="media-body">
      <h5 class="card-title title-2">Kirim Foto</h5>
      <p class="card-text text-secondary">Kirimkan foto via Email warna@sci-paint.com, Atau juga bisa melalui form simulasi dibawah ini.</p>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="media p-4">
    <i class="fa fa-sparkles fa-3x mr-4 text-primary"></i>
    <div class="media-body">
      <h5 class="card-title title-2">Simulasi Warna</h5>
      <p class="card-text text-secondary">Simulasi warna akan dikerjakan oleh tim kami dalam jangka waktu 1 - 3 hari, Anda akan menerima e-mail.</p>
    </div>
  </div>
  </div>
</div>
  </div>
  </section>
  <!-- <div class="container">
  <div class="col-md-8 offset-md-2">
  <div class="badge badge-primary text-left w-100">
  <p class="mb-0">Untuk solusi simulasi warna rumah silahkan isi form dibawah ini. Simulasi warna gratis <br> untuk setiap pelanggan produk sci paint.</p>
  </div>
  </div>
  </div> -->
  <section class="space-m">
  <div class="container">
  <div class="card p-5">
  <form method="POST" id="proses" action="{{ route('simulasi.send') }}" enctype="multipart/form-data">
							{{ CSRF_FIELD() }}
						  <div class="form-row">
							  <div class="form-group col-md-6">
							    <label  for="">Nama Lengkap</label>
							    <input type="text" required="" name="name" class="form-control " required id="" placeholder="Tulis nama">
							  </div>
							  <div class="form-group col-md-6">
							    <label  for="">Alamat Email</label>
							    <input type="email" required="" name="email" class="form-control " required id="" aria-describedby="emailHelp" placeholder="Tulis email">
							  </div>
						  </div>
						  <div class="form-row">
							  <div class="form-group col-md-12">
							    <label  for="">Nomor Telp/HP</label>
							    <input type="tel" name="nomor" required="" class="form-control" required placeholder="Tulis nomor" onkeypress="return onlyNumberKey(event)">
							  </div>
							  <div class="form-group col-md-12">
							    <label  for="" class="mb-0">Tambah Foto Rumah</label>
                  <div>
                    <p class="text-secondary"> Maksimal hanya tiga foto, pastikan gambar rumah terlihat jelas.</p>
                  </div>
                  <br>

                  <div class="bg-light rounded p-4 br-2">
                  <div class="row">
<div class="col-md-4 col-6 align-self-center">
<a href="javascript:void(0)" class="s1" onclick="s1()">
<div class="text-center">
<div>
<i class="fal fa-plus-circle text-secondary-2 fa-4x mb-3"></i>
</div>
<small>Add Photos</small>
</div>
</a>
<a href="javascript:void(0)" class="s11">
<div class="text-center">
<small><i class="fa fa-times-circle mr-2"></i>Remove</small>
</div>
</a>

        <input type='file' name="files1" accept="file_extension|image/*|media_type"  id="imgInp1" hidden/>
        <img id="blah" class="br-2 rounded mt-2" src="#" alt="your image" />
</div>
<div class="col-md-4 col-6 align-self-center border-left">
<a href="javascript:void(0)" class="s2" onclick="s2()">
<div class="text-center">
<div>
<i class="fal fa-plus-circle text-secondary-2 fa-4x mb-3"></i>
</div>
<small>Add Photos</small>
</div>
</a>
<a href="javascript:void(0)" class="s12">
<div class="text-center">
<small><i class="fa fa-times-circle mr-2"></i>Remove</small>
</div>
</a>

        <input type='file' name="files2" accept="file_extension|image/*|media_type"  id="imgInp2" hidden/>
        <img id="bloh" class="br-2 rounded mt-2" src="#" alt="your image" />
</div>
<div class="col-md-4 col-6 align-self-center mt-mobile border-left">
<a href="javascript:void(0)" class="s3" onclick="s3()">
<div class="text-center">
<div>
<i class="fal fa-plus-circle text-secondary-2 fa-4x mb-3"></i>
</div>
<small>Add Photos</small>
</div>
</a>
<a href="javascript:void(0)" class="s13">
<div class="text-center">
<small><i class="fa fa-times-circle mr-2"></i>Remove</small>
</div>
</a>

        <input type='file' name="files3" accept="file_extension|image/*|media_type"  id="imgInp3" hidden/>
        <img id="bluh" class="br-2 rounded mt-2" src="#" alt="your image" />
</div>
</div>
</div>


                  <!-- <div class="input-group">
  <div class="custom-file">
    <input type="file"  class="custom-file-input" id="image_file" aria-describedby="inputGroupFileAddon01" name="files[]" accept="file_extension|image/*|media_type" multiple required>
    <label class="custom-file-label" for="image_file">Choose file</label>
  </div>
</div> -->
                    <!-- <input type="file" class="form-control" name="files[]" accept="file_extension|image/*|media_type" multiple required> -->
							  </div>
						  </div>
						  <div class="form-group">
						    <label  for="">Keterangan Foto</label>
						    <textarea name="msg" rows="8" required class="form-control " placeholder="Tulis keterangan"></textarea>
						  </div>
				        <button type="submit" class="btn rounded-pill btn-primary btn-nasa">Kirim Simulasi</button>
				</form>
  </div>
  </div>
  </section>
  
  <form action="abs">
<!-- <div class="container space-m"></div> -->
</form>
  

  <div class="modal fade" id="srt" tabindex="-1" aria-labelledby="srtLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-auto title-2" id="srtLabel">Syarat & Ketentuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fal fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        <li>Simulasi warna rumah merupakan layanan yang dibuat untuk pelanggan setia kami.</li>
        <li>Layanan tersedia hanya pada saat jam kerja senin - jumat.</li>
        <li>Lama pengerjaan maksimal 1 - 3 hari.</li>
        <li>Setiap layanan simulasi warna rumah tidak dipungut biaya apapun, Gratis.</li>
        <li>Jika anda membutuhkan bantuan seputar layanan sci paint silahkan hubungi kami melalui email info@sci-paint.com, Terima kasih.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
@section('css')
<style>
#blah, #bloh, #bluh {
  object-fit: cover;
  /* border-radius:50%; */
  width: 100%;
  height: 150px;
}
</style>
@endsection
@section('js')
<script>

$("#proses").submit(function( event ) {
  console.log( $( this ).serializeArray() );
  // event.preventDefault();
  $('#loading').modal('show');
});

// window.onload = function() {
//     var form = document.querySelector("#proses");
//     form.onsubmit = submitted.bind(form);
// }

// function submitted(event) {
//     event.preventDefault();
//     $('#loading').modal('show');
// }

function onlyNumberKey(evt) { 
          
          // Only ASCII charactar in that range allowed 
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
              return false; 
          return true; 
      } 


// $('input[type=file]').change(function () {
//       // console.dir(this.files[0])
//       alert(this.files[0])
// })

function s1(){
  document.getElementById("imgInp1").click();
}
function s2(){
  document.getElementById("imgInp2").click();
}
function s3(){
  document.getElementById("imgInp3").click();
}
$('.s11').on('click',function(){
  $("#imgInp1").val('');
  $(this).hide();
  $('.s1').show();
  $('#blah').hide();
});
$('.s12').on('click',function(){
  $("#imgInp2").val('');
  $(this).hide();
  $('.s2').show();
  $('#bloh').hide();
});
$('.s13').on('click',function(){
  $("#imgInp3").val('');
  $(this).hide();
  $('.s3').show();
  $('#bluh').hide();
});
$('.s11,.s12,.s13').hide();
$('#blah,#bloh,#bluh').hide();

function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#bloh').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#bluh').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp1").change(function(){
        readURL1(this);
        $('.s1').hide();
        $('.s11').show();
        $('#blah').show();
    });
    $("#imgInp2").change(function(){
        readURL2(this);
        $('.s2').hide();
        $('.s12').show();
        $('#bloh').show();
    });
    $("#imgInp3").change(function(){
        readURL3(this);
        $('.s3').hide();
        $('.s13').show();
        $('#bluh').show();
    });
</script>
@endsection
@section('meta')
<meta property="og:title" content="Simulasi Warna" />
<meta property="og:url" content="{{ url('/simulasi-warna') }}" />
<meta property="og:description" content="Layanan simulasi warna untuk pelanggan setia produk sci paint." />
<title>Simulasi Warna | SCI PAINT</title>
@endsection