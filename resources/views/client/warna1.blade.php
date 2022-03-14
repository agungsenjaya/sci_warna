@extends('index')
@section('content')

<!-- <div class="py-3 bg-dark over-x ans">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
		<div class="mr-3"><a class="text-white" href="/">warna</a>
			</div>
			<div class="mr-3"><a class="text-white" href="{{ route('palet') }}">select produk</a>
			</div>
			<div class="text-white opacity ens"></div>
		</div>
	</div>
</div> -->
<div class="py-3 bg-dark over-x">
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
<div class="min-vh-100">
	<section class="space-m">
	<div class="container">
<div class="card tran-1">
<div class="trs bg-white tran-1">
<div class="row center-mobile">
<div class="col-md-6 align-self-center">
<div class="p-5 p-0-mobile">
<h1 class="text-capitalize title-2 mb-0">Panduan warna</h1>
<!-- <img src="{{ asset('img/palette.png') }}" alt="" width="50%" height="10"> -->
<p class="title-1 d-none d-sm-block lead">Panduan warna untuk setiap produk sci paint, Tersedia banyak pilihan warna.</p>
</div>
</div>
<div class="col-md-6">
	<div class="text-center">
		<!-- <img src="{{ asset('img/coloring2.jpg') }}" alt="" width="70%" class="rotate"> -->
		<div>
		<img src="{{ asset('img/drop.jpg') }}" alt="" width="100%" class="d-none d-sm-block">
		<img src="{{ asset('img/dropp.jpg') }}" alt="" width="100%" class="d-sm-none d-block mt-mobile">
		<div class="d-sm-none d-block mt-4">
			<p class="title-1 lead">Panduan warna untuk setiap produk sci paint, Tersedia banyak pilihan warna.</p>
			<a href="javascript:void(0)" class="btn btn-primary start rounded-pill">Eksplor Warna</a>
		</div>
		</div>
	</div>
</div>
</div>
</div>

<div class="ans">
<div class="bg-white center-mobile">
<div class="row">
<div class="col-md-6 align-self-center center-mobile">
<div class="p-5 p-0-mobile">
<div class="media">
<!-- <i class="fal fa-check-circle fa-3x mr-3 align-self-center text-primary"></i> -->
<div class="media-body">
<h1 class="m-0 d-sm-none d-block"><i class="fa text-primary fa-check-circle"></i></h1> <h1 class="title-2 text-capitalize m-0 ens"></h1>
<p class="title-1 lead">Silahkan pilih salah satu produk <span class="ens text-capitalize"></span> di bawah ini untuk melihat panduan warna.</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<img src="{{ asset('img/drop.jpg') }}" alt="" width="100%" class="d-none d-sm-block">
<img src="{{ asset('img/dropp.jpg') }}" alt="" width="100%" class="d-none rounded mt-mobile">
</div>
</div>
</div>

<div class="bg-primary py-1 z-in-1 text-white mt-mobile d-none d-sm-block">
<div class="px-5">
<div class="">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0 bg-transparent text-uppercase small pl-0">
    <li class="breadcrumb-item"><a class="sp-2 text-white title-2" href="/palet-warna">Kembali Sebelumnya</a></li>
    <li class="breadcrumb-item active ens text-white" aria-current="page"></li>
  </ol>
</nav>
</div>
</div>
</div>

<div class="d-sm-none d-block text-center py-2">
   <a class="btn btn-primary rounded-pill" href="/palet-warna">Kembali Sebelumnya</a>
</div>

</div>
<div class="mt-mobile" id="start" style="background-image:linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.2))">
<div class="px-4 pad-res">
				<div class="row pt-4 aaa1 ">@foreach($aa as $aa) <a href="javascript:void(0)" class="mb-4 col-md-4 text-dark a{{ $aa->brand_id }}"> {{ $aa->brand_id }} </a> @endforeach</div>
				<div class="">
					<div class="b1"></div>
				</div>
			</div>
			</div>

</div>
</div>
	</section>
</div>




@endsection
@section('js')
<script src="{{ asset('js/warna.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script>
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>
@endsection
@section('meta')
<meta property="og:title" content="Panduan Warna" />
<meta property="og:url" content="{{ url('palet-warna') }}" />
<meta property="og:description" content="Panduan warna semua produk cat sci paint, Seperti spectrum, kem-tone, colortone dan yang lainnya." />
<title>Palet Warna | SCI PAINT</title>
@endsection