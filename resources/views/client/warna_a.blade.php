@php
$asu = count($data2);
$asa = $data2[rand(0,$asu - 1)];
@endphp
@extends('index')
@section('content')

<div class="modal-backdrop opacity-2 show fade z-in-1 mda" style="display:none !important"></div>
<div class="py-3 bg-dark over-x">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
			<div class="me-3"><a class="text-white" href="/">warna</a>
			</div>
			<div class="text-white opacity">{{ $data->judul }}</div>
	</div>
	</div>
</div>
@if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
<div class="text-center">
	<div class="space-xl bg-white">
		<div class="container">
			<div class="text-center">
				<h2 class="text-capitalize display-5 title-2">{{ $data->judul }}</h2>
			</div>
			<div class="col-md-10 offset-md-1">
				<div class="row g-0s">@foreach($data2->random(6) as $dd)
					<a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $dd -> slug]) }}" class="col-md-2 col-4 hvr-grow mb-4">
						<div class="images">
								<div class="round-icon ricon-mobile" style="height:150px;width:100%;background-color:#{{ $dd->rgb }}"></div>
							<div class="centered text-dark small">
								<p class="mb-0 title-2">{{ $dd->kode }}</p>
							</div>
						</div>
					</a>@endforeach</div>
			</div>
			<p class="text-center text-smali title-1 mb-0 mt-4 ">Warna sebenarnya mungkin berbeda dari representasi di layar. Untuk mengkonfirmasi pilihan warna
				<span class="d-none d-sm-block"></span>Anda sebelum membeli, silakan lihat chip warna fisik, kartu warna, atau sampel yang dicat.</p>
			<!-- <div class="text-center"> <a href="javascript:void(0)" class="btn btn-primary mt-4  start">Warna lainnya</a></div> -->
		</div>
	</div>
</div>@else
<div class="bg-dark py-5 text-white">
	<div class="col-md-6 offset-md-3">
		<div class="row text-center">
			<div class="col-md-12 align-self-center">
				<h2 class="text-capitalize display-5 title-2">{{ $data->judul }}</h2>
				<div id="users">
        <div class="w-100 position-relative z-in-1">
					<div class="justify-content-center d-flex mt-3">
						<div class="input-group rounded border">
						<span class="input-group-text bg-white border-0" id="basic-addon1">
							<img src="{{ asset('img/search.svg') }}" alt="" class="" width="20" height="20">
						</span>
						<input type="text" id="warnaku" onfocus="cari()" class="search form-control border-0" placeholder="Cari warna {{ $data->judul }}" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
          <div class="justify-content-center d-flex mt-2">
          <div class="card text-left text-dark w-50 p-2 w-res-100 position-absolute" id="mds" style="height:40vh;overflow-y:auto;display:none">
          <div class="list-group list-group-flush list">
            @foreach($data2 as $akk)
            <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $akk -> slug]) }}" class="media list-group-item" id="warnakuu">
            <div class="media">
              <div class="round-icon ricon-mobile me-3" style="height:40px;width:40px;background-color:#{{ $akk->rgb }}"></div>
              <div class="media-body align-self-center">
                <p class="ak1 mt-0 mb-1 text-dark title-2">{{ $akk->judul }}</p>
                <p class="ak2 mb-0 text-dark">{{ $akk->kode }}</p>
              </div>
              </div>
            </a>
            @endforeach
            
          </div>
            
          </div>
          </div>
				</div>
				</div>
				<p class="text-center text-smali title-1 mb-0 mt-4 ">Warna sebenarnya mungkin berbeda dari representasi di layar. Untuk mengkonfirmasi pilihan warna
				<span class="d-none d-sm-block"></span>Anda sebelum membeli, silakan lihat chip warna fisik, kartu warna, atau sampel yang dicat.</p>
			</div>
		</div>
	</div>
</div>@endif @if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
<div class="space-m bg-dark text-white text-center">
	<div class="container">
		<h2 class="text-capitalize title-2 d-none d-sm-block mb-0">Visual warna ruangan</h2>
		<p class="lead mb-4">Berikut implementasi warna pada ruangan rumah.</p>
		<div class="swiper swiper-1">
			<div class="swiper-wrapper"> <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $asa -> slug]) }}" class="swiper-slide"><div class="br-2 " style="background-color:#{{ $asa->rgb }}"> <img src="{{ asset('img/simulasi/ura.png') }}" alt="" width="100%" class=""></div><div class="text-white small mt-2"><p class="mb-0 title-2">{{ $asa->judul }}</p><p class="mb-0">{{ $asa->kode }}</p></div> </a>  <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $asa -> slug]) }}" class="swiper-slide"><div class="" style="background-color:#{{ $asa->rgb }}"> <img src="{{ asset('img/simulasi/pa.png') }}" alt="" width="100%" class=""></div><div class="text-white small mt-2"><p class="mb-0 title-2">{{ $asa->judul }}</p><p class="mb-0">{{ $asa->kode }}</p></div> </a>  <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $asa -> slug]) }}" class="swiper-slide"><div class="" style="background-color:#{{ $asa->rgb }}"> <img src="{{ asset('img/simulasi/ia.png') }}" alt="" width="100%" class=""></div><div class="text-white small mt-2"><p class="mb-0 title-2">{{ $asa->judul }}</p><p class="mb-0">{{ $asa->kode }}</p></div> </a>  <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $asa -> slug]) }}" class="swiper-slide"><div class="" style="background-color:#{{ $asa->rgb }}"> <img src="{{ asset('img/simulasi/cc.png') }}" alt="" width="100%" class=""></div><div class="text-white small mt-2"><p class="mb-0 title-2">{{ $asa->judul }}</p><p class="mb-0">{{ $asa->kode }}</p></div> </a>
			</div>
			<div class="swiper-pagination mt-3 d-sm-none d-block" style="position:initial"></div>
		</div>
	</div>
</div>@endif
<section class="space-m" id="start">
	<div class="container">
	@if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
	<div class="row">
	<div class="col-md-6 offset-md-3">
	<div id="users" class="mb-5">
        <div class="w-100 position-relative z-in-1">
					<div class="justify-content-center d-flex mt-3">
						<div class="input-group rounded border">
						<span class="input-group-text bg-white border-0" id="basic-addon1">
							<img src="{{ asset('img/search.svg') }}" alt="" class="" width="20" height="20">
						</span>
							<input type="text" id="warnaku" onfocus="cari()" class="search form-control border-0" placeholder="Cari warna {{ $data->judul }}" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
          <div class="justify-content-center d-flex mt-2">
          <div class="card text-left text-dark w-100 p-2 position-absolute" id="mds" style="height:40vh;overflow-y:auto;display:none">
          <div class="list-group list-group-flush list">
            @foreach($data2 as $akk)
            <a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $akk -> slug]) }}" class="media list-group-item" id="warnakuu">
            <div class="media">
              <div class="round-icon ricon-mobile me-3" style="height:40px;width:40px;background-color:#{{ $akk->rgb }}"></div>
              <div class="media-body align-self-center">
                <p class="ak1 mt-0 mb-0 text-dark title-1">{{ $akk->judul }}</p>
                <p class="ak2 mb-0 text-dark">{{ $akk->kode }}</p>
              </div>
              </div>
            </a>
            @endforeach
            
          </div>
            
          </div>
          </div>
				</div>
				</div>
				</div>
				</div>
				@else
				@endif
		<div class="col-md-8 offset-md-2">
			<div class="aka">
				<div class="aki row text-center g-0s">@foreach($data1 as $dd)
					<a href="{{ route('palet.b',['a' => $data -> slug, 'b' => $dd -> slug]) }}" class="col-md-3 col-4 hvr-grow mb-4 m-0-mobile h-100">
						<div class="">
								<div class="round-icon ricon-mobile" style="height:150px;width:100%;background-color:#{{ $dd->rgb }}"></div>
							<div class="text-dark small mt-2">
								<p class="mb-0 title-2">{{ $dd->judul }}</p>
								<p class="mb-0">{{ $dd->kode }}</p>
							</div>
						</div>
					</a>@endforeach {{ $data1->links() }}</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.0.2/list.min.js" integrity="sha512-MT5YyrGWqMGkIbwkVUZEWGrRDjlNx8loukEdFyzLo4s8INKVxnDQy2eFcpmnWGrFwJ+X8mRTQOJpWCayXz7+Og==" crossorigin="anonymous"></script>
<script>

function cari(){
  $('#mds, .mda').show();
};
$('.mda').on('click',function(){
  $('#mds').hide();
  $(this).hide();
});
$(document).keyup(function(e) {
  if (e.key === "Escape") { // escape key maps to keycode `27`
    $('#mds, .mda').hide();
    $('input').blur();
 }
});
var options = {
    valueNames: [ 'ak1', 'ak2' ]
  };
  
  var userList = new List('users', options);

var swiper = new Swiper('.swiper-1', {
	  allowTouchMove: false,
      spaceBetween: 30,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.4,
		  spaceBetween: 20,
		  allowTouchMove: true,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      }
    });
$('ul.pagination').hide();
// $( document ).ready(function() {
//   $('div.jscroll-inner').addClass('');
// });
$(function() {
        $('.aka').jscroll({
            autoTrigger: true,
            loadingHtml: `<div class="text-center"><img class="center-block" src="{{ asset('img/Spinner.gif') }}" width="80" alt="Loading..." /></div>`,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.aka',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>
@endsection
@section('meta')
<meta property="og:title" content="Warna {{ $data->judul }}" />
<meta property="og:url" content="{{ url('/palet-warna') }}{{ '/' . $data->slug }}" />
<meta property="og:description" content="Panduan warna produk cat {{ $data->judul }} untuk pengecatan rumah dan proyek anda." />
<title>Warna {{ $data->judul }} | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection