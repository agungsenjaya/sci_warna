@extends('index')
@section('content')
@include('layouts.header-tr')
<div id="fullpage">
	<div class="section z-hero">
  <div class="images">
  <video id="moodvideo" autoplay loop poster="{{ asset('img/bg-store.jpg') }}">
    <source src="{{ asset('img/forecast.mp4') }}"  type='video/mp4'>
    <img id="alternative" src="https://dummyimage.com/1349x400" />
</video>
</div>
<div class="centered text-center z-in-1 px-2">
  <h1 class="display-5 title-2 text-uppercase text-white mb-0">Coloring  <br> For <br> Today</h1>
  <p class="text-white lead text-normali">Pandaun warna rumah produk sci paint.</p>
  <a href="" class="btn btn-danger rounded-pill">Eksplor Warna</a>
</div>
<div class="grad-hero"></div>
</div>
<div class="section text-center" style="background-image:url('{{ asset('img/hm-2.jpg')}}');background-position:center;background-size:cover;background-repeat:no-repeat">
<div class="container">
<div class="sh-2 col-md-6 offset-md-3 rd-image py-5 px-2">
<p class="text-white d-none d-sm-block">Spectrum Blue Coral - <b>AE469</b></p>
<h1 class="text-white display-6 title-2 text-uppercase my-0">Tren Warna {{ date('Y') }}</h1>
<p class="text-white lead text-normali">Dapatkan rekomendasi warna terbaik <br>untuk pengecatan rumah Anda.</p>
<a href="#" class="btn btn-danger rounded-pill">Selengkapnya</a>
</div>
</div>
</div>
<!-- <div class="section" style="background-image:url('{{ asset('img/hm-3.jpg')}}');background-position:center;background-size:cover;background-repeat:no-repeat">
</div> -->

<div class="section foot">
<div class="d-flex flex-column align-items-end h-100">
  <div class="w-100 vh-100 bg-light">
  <div class="h-100 align-self-center d-flex align-items-center">
  <div class="row g-0s w-100">
  <a href="" class="col-md">
    <div class="vh-100 p-4 d-flex align-items-center images" style="background-image:url('{{ asset('img/hm-3.jpg')}}');background-position:center;background-size:cover;background-repeat:no-repeat">
    <div class="text-center w-100 z-in-1">
    <h1 class="text-white title-2 display-6-res text-uppercase my-0">Kartu Warna</h1>
    <p class="text-white lead text-normali">Dapatkan kartu warna terbaru.</p>
    <div class="btn btn-danger rounded-pill">Selengkapnya</div>
    </div>
    </div>
    <div class="grad-over"></div>
  </a>
  <a href="" class="col-md d-none d-sm-block">
    <div class="vh-100  p-4 d-flex align-items-center images" style="background-image:url('{{ asset('img/hm-4.jpg')}}');background-position:center;background-size:cover;background-repeat:no-repeat">
    <div class="text-center w-100 z-in-1">
    <h1 class="text-white title-2 text-uppercase my-0">Simulasi Warna</h1>
    <p class="text-white lead">Dapatkan rekomendasi warna rumah.</p>
    <div class="btn btn-danger rounded-pill">Selengkapnya</div>
    </div>
    </div>
    <div class="grad-over"></div>
  </a>
</div>
  </div>
  </div>

  <div class="w-100 both">
  
<div class="grad-default transparent-res space-s d-none d-sm-block">
  <div class="container text-white">
  <div class="w-100">
  <div class="">
			<div class="d-flex justify-content-between flex-column-reverse flex-md-row center-mobile">
			<div class="">
      <div class="d-none d-md-block">
				<p class="opacity text-white text-uppercase mb-0 small">Hak cipta © 2020 <a href="/" class="text-white"> PT.San Central Indah</a>, Seluruh hak cipta dilindungi undang-undang.</p>
      </div>
      <div class="d-md-none d-block mt-mobile">
				<p class="text-white text-uppercase small mb-0 opacity">Hak cipta &copy; {{ date('Y') }} <a href="/" class="text-white"> PT.San Central Indah</a></p>
			</div>
			</div>
			<div>
			<span>
                    <a href="https://www.facebook.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-facebook"></i></a>
                    <a href="https://twitter.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-twitter"></i></a>
                    <a href="https://www.instagram.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-instagram"></i></a>
                    <a href="https://www.youtube.com/scipaint" class="text-white" target="_blank" title=""><i class="fab font-icon-1 fa-youtube"></i></a>
                </span>
			</div>
			</div>
			</div>
  </div>

  </div>
  </div>
  
  <!-- <div class="space-s d-sm-none d-block">
  <div class="container text-white">
  <div class="w-100">
  <div class="">
			<div class="d-flex justify-content-between flex-column-reverse flex-md-row center-mobile">
			<div class="">
      <div class="d-none d-md-block">
				<p class="opacity text-white text-uppercase mb-0 small">Hak cipta © 2020 <a href="/" class="text-white"> PT.San Central Indah</a>, Seluruh hak cipta dilindungi undang-undang.</p>
      </div>
      <div class="d-md-none d-block mt-mobile">
				<p class="text-white text-uppercase small mb-0 opacity">Hak cipta &copy; {{ date('Y') }} <a href="/" class="text-white"> PT.San Central Indah</a></p>
			</div>
			</div>
			<div>
			<span>
                    <a href="https://www.facebook.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-facebook"></i></a>
                    <a href="https://twitter.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-twitter"></i></a>
                    <a href="https://www.instagram.com/scipaint" class="mr-4 text-white" target="_blank" title=""><i class="fab font-icon-1 fa-instagram"></i></a>
                    <a href="https://www.youtube.com/scipaint" class="text-white" target="_blank" title=""><i class="fab font-icon-1 fa-youtube"></i></a>
                </span>
			</div>
			</div>
			</div>
  </div>

  </div>
  </div> -->
  
  </div>

</div>
</div>

</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.css" integrity="sha512-xbp9DExL/1FLDKhQIJNwoCaBjPytQcPMg82UsbBq02kckLcVzQms0+Ot54jXwuBjR6M91vaYHSmqrZlQ/nOEAQ==" crossorigin="anonymous" />
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.js"></script>
<script>
$(document).ready(function() {
	$('#fullpage').pagepiling({
    animateAnchor: false,
    loopBottom:false,
    navigation: {
            'textColor': '#fff',
            'bulletsColor': '#fff',
            'position': 'left',
            'tooltips': ['HOME', 'TREN', 'SERVICE']
        },
        afterLoad: function(anchorLink, index){
        
  },
  });
});
</script>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>SCI PAINT | SAN CENTRAL INDAH</title>
@endsection