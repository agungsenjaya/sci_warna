@php
$dd1 = count($data2) - 5;
$dd2 = $data2[$dd1]->id;
$dd3 = $data1->id + 5;
$dd4 = $data1->id + 7;
$dd5 = $data1->for_id;
@endphp
@extends('index')
@section('content')

<div class="py-3 bg-renew over-x">
<div class="over-x-res px-20">
<div class="d-flex text-uppercase sp-2 small justify-content-center">
		<div class="mr-3"><a class="text-white" href="{{ route('palet') }}">palet warna</a></div>
		<div class="mr-3"><a class="text-white" href="{{ url('/palet-warna') }}/{{ $data->slug }}">{{ $data->slug }}</a></div>
		<div class="text-white opacity">{{ $data1->judul }}</div>
	</div>
</div>
</div>

<div class="min-vh-100 bg-light">
<section class="space-m">
<div class="container">
<div class="card">

<div class="p-3 d-flex justify-content-end">
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
</div>

<div class="row g-0s">
<div class="col-md d-none d-md-block">
<div class="h-100">
<div class="p-4 bg1" style="background:#{{ $data1->rgb }}">
       
<a href="javascript:void(0)" class="text-uppercase sp-1 text-dark a1" data-toggle="modal" data-target="#kategori">
      <i class="mr-2 fal fa-info-circle text-danger"></i>interior
</a>
      <a href="javascript:void(0)" class="text-uppercase sp-1 text-dark a2" data-toggle="modal" data-target="#kategori">
      <i class="mr-2 fal fa-info-circle text-danger"></i>interior / exterior
      </a>

    <p class="mb-0 lead mt-2 b11">{{ $data1->judul }}</p>
    <p class="mb-0 b12">{{ $data1->kode }}</p>
    <div class="row g-0s mt-cc">
    <div class="col-md">
        <a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border card sh-0 w-100 b1" id="{{ $data1->id }}" style="background:#{{ $data1->rgb }};"></a>
    </div>
@if($data1->id >= $dd2)
@foreach($data2->random(5) as $ddi)
<div class="col-md">
    <a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border card sh-0 w-100 b1" id="{{ $ddi->id }}" style="background:#{{ $ddi->rgb }};"></a>
</div>
@endforeach
@else
@for($i=$data1->id; $i < $dd3; $i++)
  @php
  $amk = $warna[$i];
  @endphp
  <div class="col-md">
    <a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border card sh-0 w-100 b1" id="{{ $amk->id }}" style="background:#{{ $amk->rgb }};"></a>
</div>
@endfor
@endif
</div>
</div>
    <div class="">

    <ul class="nav nav-pills text-uppercase small sp-2 cardis mt-1 mx-1" id="pills-tab" role="tablist">
  <li class="nav-item flex-fill bg1" role="presentation" style="background:#{{ $data1->rgb }};">
    <a class="nav-link active" id="pills-lainnya-tab" data-toggle="pill" href="#pills-lainnya" role="tab" aria-controls="pills-lainnya" aria-selected="true">lainnya</a>
  </li>
  <li class="nav-item flex-fill bg1" role="presentation" style="background:#{{ $data1->rgb }};">
    <a class="nav-link" id="pills-mirip-tab" data-toggle="pill" href="#pills-mirip" role="tab" aria-controls="pills-mirip" aria-selected="false">warna serupa</a>
  </li>
  <li class="nav-item flex-fill bg1" role="presentation" style="background:#{{ $data1->rgb }};">
    <a class="nav-link" id="pills-simpan-tab" data-toggle="pill" href="#pills-simpan" role="tab" aria-controls="pills-simpan" aria-selected="false">simpan</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane  show active" id="pills-lainnya" role="tabpanel" aria-labelledby="pills-lainnya-tab">

  <div class="list-group list-group-flush w-100 position-absolute both">
  @foreach($data2->random(3) as $ddi)
    <a href="javascript:void(0)" class="list-group-item text-dark b1" id="{{ $ddi->id}}" style="background:#{{ $ddi->rgb }};">
      <p class="mb-0 title-1 small">{{ $ddi->kode }}</p>
      <p class="mb-0 text-capitalize">{{ $ddi->judul }}</p>
    </a>
  @endforeach
</div>
  
  </div>
  <div class="tab-pane " id="pills-mirip" role="tabpanel" aria-labelledby="pills-mirip-tab">

<div class="row g-0s mt-1">
  @if($data1->id >= $dd2)
@foreach($data2->random(7) as $ddi)
<div class="col-md-4">
    <a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border card sh-0 w-100 b1" id="{{ $ddi->id }}" style="background:#{{ $ddi->rgb }};height: 68px"></a>
</div>
@endforeach
@else
@for($i=$data1->id; $i < $dd4; $i++)
  @php
  $amk = $warna[$i];
  @endphp
  <div class="col-md-4">
    <a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border card sh-0 w-100 b1" id="{{ $amk->id }}" style="background:#{{ $amk->rgb }};height: 68px"></a>
</div>
@endfor
@endif
  </div>

  </div>
  <div class="tab-pane " id="pills-simpan" role="tabpanel" aria-labelledby="pills-simpan-tab">

  <div class="w-100 p-3">
    <p class="">Simpan warna untuk memudahkan anda membeli produk sci paint, tersedia di seluruh toko bangunan terdekat rumah Anda.</p>
    <div class="d-flex flex-column">
      <a href="javascript:void(0);" class="btn  btn-danger rounded-pill  mb-4" id="snap">Simpan warna</a>
      </div>
    </div>

  </div>
</div>

    <div class="mb-3 d-none">
    <div class="media">
    <img alt="" class="border rounded-pill mr-3 img2 bg-light" width="50" id="{{ $data->produk_id }}">
    <div class="media-body">
        <p class="text-capitalize mb-0 title-1">{{ $data->judul }}</p>
        <p class="text-uppercase  small mb-0 sp-2">{{ $data->ktt }}</p>
    </div>
    </div>
    </div>
    </div>

</div>
</div>

<div class="col-md-8">
    <div class="images">
    <div class="swiper-container slider-1">
<div class="swiper-wrapper">
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/bedrooms/ai.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
        <div class="swiper-slide">
        <div style="background:#{{ $data1->rgb }}" class="bg1">
            <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy">
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <div>
<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/bedrooms/ai.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
      <a href="javascript:void(0)" class="swiper-slide">
      <div style="background:#{{ $data1->rgb }}" class="bg1">
      <div class="images">
        <img src="http://warna.sci-paint.com/img/simulasi/living/ura.png" width="100%" alt="" class="swiper-lazy border">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
      <div class="centered">
          <i class="fal fa-check-circle fa-2x dconn"></i>
      </div>
      </div>
      </a>
    </div>
    <div class="d-none d-sm-block swiper-button-next">
      <div class="px-1 py-3 bg-danger rounded-left">
      <div class="icons-chevron-compact-right-white" style="width:20px;height:20px"></div>
    </div>
    </div>
    <div class="d-none d-sm-block swiper-button-prev">
    <div class="px-1 py-3 bg-danger rounded-right">
      <div class="icons-chevron-compact-left-white" style="width:20px;height:20px"></div>
    </div>
    </div>
  </div>
</div>

</div>

</div>

<div class="p-2 bg1" style="background:#{{ $data1->rgb }};">
  <div class="row">
  <div class="col-md-2">
    <img alt="" class="img2" width="100%" id="{{ $data->produk_id }}">
  </div>
  <div class="col-md-4 offset-md-1 align-self-center">
    <p class="lead text-capitalize mb-0">{{ $data->judul }}</p>
    <p class="text-capitalize">{{ $data->ktt }}</p>
  </div>
  <div class="col-md-3 offset-md-2 align-self-center">
    <div class=" m-3">
      <a target="_blank" href="https://www.sci-paint.com/product/view/{{ $data->slug }}" class="btn  btn-danger rounded-pill btn-block">lihat produk</a>
  </div>
  </div>
  </div>
</div>
</div>

</div>
</section>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Notifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fal fa-times opacity"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
          <a href="" class="btn">
          <i class="fa fa-file-pdf fa-3x mb-3 text-danger"></i>
          <div class="line-small">
            Simpan Warna <br>
            <span class="small text-secondary">FORMAT PDF</span>
          </div>
          </a>
        </div>
        <div class="col-md-6 border-left">
          <a href="" class="btn">
          <i class="fa fa-image-polaroid fa-3x mb-3 text-danger"></i>
          <div class="line-small">
          Simpan Warna <br>
            <span class="small text-secondary">FORMAT JPG</span>
          </div>
          </a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="kategoriLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="kategoriLabel">notifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body lead">
      <div class="aa1">
            Warna ini hanya di rekomendasikan untuk interior rumah saja.
      </div>
      <div class="aa2">
            Warna ini bisa digunakan untuk interior / exterior rumah Anda.
      </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
<!-- <div class="oko"> -->
<div class="oko" style="display:none">
  <div id="capture">
    <div id="img-out">
<div class="card border">
<div class="p-2 bdr" style="border-right:3px solid #{{ $data1->rgb }}">
<div class="row g-0s">
<div class="col-md-6">
<div class="bg1 rd-color" style="background:#{{ $data1->rgb }}">
  <img src="{{ asset('img/ura.png') }}" width="100%" alt="" class="rd-color">
</div>
</div>
<div class="col-md-6 align-self-center">
<div class="px-5">
<p class="small sp-2 text-uppercase mb-0">produk</p>
<p class="small text-uppercase title-2">{{ $data->judul }} <sup>&reg;</sup> </p>
<hr class="hr-save">
<div class="media">
<div class="bg1 mr-3 rd-color border" style="background:#{{ $data1->rgb }}">
<img src="https://dummyimage.com/150x70" alt="" class="rd-color opacity-0">
</div>
<div class="media-body align-self-center">
  <p class="mb-0 b11">{{ $data1->judul }}</p>
  <p class=" b12 mb-0 title-1">{{ $data1->kode }}</p>
</div>
</div>
<hr class="hr-save">
<p class="small">Warna sebenarnya mungkin berbeda dari representasi di layar. Untuk mengkonfirmasi pilihan warna Anda sebelum membeli, silakan lihat chip warna fisik, kartu warna, atau sampel yang dicat.</p>

</div>
</div>
</div>
</div>
</div>
    </div>
  </div>
</div>
</div>


@endsection
@section('css')
<style>
.gallery-thumbs .swiper-slide-thumb-active img{
  border: 1px solid #D7052C !important;
}
.gallery-thumbs .swiper-slide-thumb-active .dconn{
  display:block !important;
}
.gallery-thumbs .swiper-slide{
  opacity:1;
}
.gallery-thumbs .swiper-slide  .dconn{
  display:none;
}
</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
<script src="{{ asset('js/canvas-toBlob.js') }}"></script>
<script src="{{ asset('js/Blob.js') }}"></script>
<script src="{{ asset('js/warna_b.js') }}"></script>
<script>
// ==== Warna ===
$('.a1,.a2,.aa1,.aa2').hide();
var kategori;
function kategori(){
  kategori = '<?php echo $dd5; ?>';
  if (kategori == 2) {
      $('.a1,.aa1').hide();
      $('.a2,.aa2').show();
  }else{
    $('.a1,.aa1').show();
    $('.a2,.aa2').hide();
  }
}
kategori();

var a;
var warnas;

// $('#link').click(function() {
//    window.history.pushState('obj', 'newtitle', '/abc');
//    return false;
// });

var jd = `<?php echo $data1->judul ?>`;
var kd = `<?php echo $data1->kode ?>`;
var mk = `<?php echo $data->judul ?>`;

var a2a_config = a2a_config || {};
a2a_config.onclick = 3;
a2a_config.icon_color = "#D7052C";
a2a_config.locale = "id";

$('.b1').on('click', function(){
  var ons = $(this).attr('id');
  for (let index = 0; index < warnas.length; index++) {
    let ele = warnas[index];
    if (ele.id == ons) {
      var lk = "https://sci-paint.com/palet-warna/" + '<?php echo $data->slug; ?>' + "/" + ele.slug;
      window.history.pushState('obj', 'newtitle', lk);
      $('.b11').text(ele.judul);
      jd = ele.judul;
      kd = ele.kode;
      $('title').text(ele.judul);
      $('.bdr').css('border-color', '#' + ele.rgb);
      $('.b12').text(ele.kode);
      $('.bg1').css('background','#' + ele.rgb);
      var ops = ele.for_id;
      if (ops == 2) {
      $('.a1,.aa1').hide();
      $('.a2,.aa2').show();
      }else{
        $('.a1,.aa1').show();
        $('.a2,.aa2').hide();
      }
    }
  }
});

$('#snap').on('click',function(e){
			e.preventDefault()
	    	$('.oko').css('display', 'block');
	    	html2canvas($("#capture"), {
                useCORS: true,
                onrendered: function (canvas) {
                    theCanvas = canvas;
                    document.getElementById('img-out').appendChild(canvas);

                    canvas.toBlob(function (blob) {
                        // saveAs(blob, mk + jd + kd +" - "+{{ time() }}+".jpg");
                        saveAs(blob, mk+ " - " + jd + " - " + kd +".jpg");
                    });
                    document.getElementById('img-out').removeChild(canvas);
                    $('.oko').css('display', 'none');
                }
            });
	    });

// ==== End Warna ===
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection
@section('meta')
<title>{{ $data1->judul }}</title>
<meta property="og:title" content="{{ $data1->judul }}" />
<meta property="og:url" content="{{ url('') }}/palet-warna/{{ $data->slug }}/{{ $data1->slug }}">
@endsection