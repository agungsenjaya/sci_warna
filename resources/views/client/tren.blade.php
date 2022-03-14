@extends('index') 
@section('content') 

<div class="py-3 bg-dark over-x z-in-1">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
			<div class="me-3"><a class="text-white" href="/">warna</a>
			</div>
			<div class="me-3"><a class="text-white" href="{{ route('palet') }}">palet warna</a>
			</div>
			<div class="me-3"><a class="text-white" href="{{ route('kartu.warna') }}">kartu warna</a>
			</div>
      <div class="me-3"><a class="text-white" href="{{ route('gallery') }}">inspirasi warna</a>
			</div>
			<div class="me-3"><a class="text-white" href="{{ route('tren.warna') }}">tren warna</a>
			</div>
		</div>
	</div>
</div>
<div class="min-vh-100">
  <section>
    <div class="images">
  <div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
    
    <div class="to-center">
    <div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
    <div class="text-white">
    <h2 class="text-uppercase display-5 title-5 mb-0">Tren Warna Rumah</h2>
    <p class="title-1 lead">Inspirasi warna setiap tahunnya, dipilih dari berbagai sumber sebagai patokan <br><span class="d-none d-sm-block">desainer dunia. Baik untuk pengecatan rumah Anda.</span></p>
    <!-- <a href="javascript:void(0)" class="start btn btn-primary ">eksplor tren warna</a> -->
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- <div class="container mt-4">
  <div class="row g-0s">
  <label for="staticEmail" class="col-sm-4 col-form-label">Cari berdasarkan tahun</label>
  <div class="col-sm-6">
  <select name="" id="" class="form-control br-2 ">
  <option value=""><span class="title-2">-- Find Select Years --</option>
  </select>
  </div>
  </div>
  </div> -->
  <section class="space-xl" id="start">
  <div class="container">
  <div class="row g-0s flex-column-reverse flex-lg-row">
  <div class="col-md-6 align-self-center">
  <div class="mt-5 pr-4 p-0-mobile">
  <p class="sp-2 text-uppercase mb-0">Tren warna {{ $tren[2]->year }}</p>
  <h1 class="title-2 text-capitalize mt-0 display-5">Tren warna nusantara</h1>
  <p class="lead">Tren warna dengan nuansa biru yang tegas bertemakan Bahari nusantara untuk rumah Anda.</p>
  <a href="{{ route('tren.view', ['slug' => $tren[2]->slug]) }}" class="btn btn-primary ">Selengkapnya</a>
  </div>
  </div>
  <div class="col-md-6">
  <div class="bg-light">
  <div class="images">
  <!-- <img src="{{ asset('img/2020.jpg') }}" alt="" width="100%" class=""> -->
  <!-- <img src="https://dummyimage.com/700x650" alt="" width="100%" class=""> -->
  <img src="http://warna.sci-paint.com/{{ $tren[2]->img }}" alt="" width="100%" class="">
  <a href="" class="centered z-in-1 d-none">
    <i class="fab fa-youtube fa-5x"></i>
  </a>
  </div>
  </div>
  </div>
  </div>
  <div class="row g-0s mt-4">
  <div class="col-md-6">
  <div class="bg-light">
  <div class="images">
  <!-- <img src="{{ asset('img/2020.jpg') }}" alt="" width="100%" class=""> -->
  <!-- <img src="https://dummyimage.com/700x650" alt="" width="100%" class=""> -->
  <img src="http://warna.sci-paint.com/{{ $tren[1]->img }}" alt="" width="100%" class="">
  <a href="" class="centered z-in-1 d-none">
    <i class="fab fa-youtube fa-5x"></i>
  </a>
  </div>
  </div>
  </div>
  <div class="col-md-6 align-self-center">
  <div class="mt-5 p-4 p-0-mobile">
  <p class="sp-2 text-uppercase mb-0">Tren warna {{ $tren[1]->year }}</p>
  <h1 class="title-2 text-capitalize mt-0 display-5">Tren warna nusantara</h1>
  <p class="lead">Tren warna dengan nuansa coklat yang tegas bertemakan Fauna nusantara untuk rumah Anda.</p>
  <a href="{{ route('tren.view', ['slug' => $tren[1]->slug]) }}" class="btn btn-primary ">Selengkapnya</a>
  </div>
  </div>
  </div>
  <div class="row g-0s flex-column-reverse flex-lg-row mt-4">
  <div class="col-md-6 align-self-center">
  <div class="mt-5 pr-4 p-0-mobile">
  <p class="sp-2 text-uppercase mb-0">Tren warna {{ $tren[0]->year }}</p>
  <h1 class="title-2 text-capitalize mt-0 display-5">Tren warna nusantara</h1>
  <p class="lead">Tren warna dengan nuansa ungu yang tegas bertemakan Tarian nusantara untuk rumah Anda.</p>
  <a href="{{ route('tren.view', ['slug' => $tren[0]->slug]) }}" class="btn btn-primary ">Selengkapnya</a>
  </div>
  </div>
  <div class="col-md-6">
  <div class="bg-light">
  <div class="images">
  <!-- <img src="{{ asset('img/2020.jpg') }}" alt="" width="100%" class=""> -->
  <!-- <img src="https://dummyimage.com/700x650" alt="" width="100%" class=""> -->
  <img src="http://warna.sci-paint.com/{{ $tren[0]->img }}" alt="" width="100%" class="">
  <a href="" class="centered z-in-1 d-none">
    <i class="fab fa-youtube fa-5x"></i>
  </a>
  </div>
  </div>
  </div>
  </div>

  </div>
  </section>
  <div class="bg-light">
  <section class="space-m">
  <div class="container">
  <div class="text-center bg-white py-5 px-2">
  <h2 class="text-capitalize display-5 title-2 mb-0">Saran Warna Spectrum</h2>
  <p class="">Rekomendasi warna spectrum untuk pengecatan rumah</p>
  <div class="row g-0s">@foreach($data2->random(6) as $war)
				<a href="/palet-warna/spectrum-interior-exterior-paint/{{ $war->slug }}" class="col-md-2 col-4 hvr-grow">
					<div class="images">
						<div class="round-icon" style="height:150px;width:100%;background-color:#{{ $war->rgb }}"></div>
						<div class="centered text-dark small">
							<p class="mb-0 title-2">{{ $war->kode }}</p>
						</div>
					</div>
				</a>@endforeach</div>
        <br>
        <br>
        <a href="/palet-warna" class="btn btn-primary ">Eksplor warna</a>
  </div>
  </div>
  </section>
</div>
  <section class="space-m">
  <div class="container">
  <p class="text-center mb-5 title-1">Koleksi warna terbaik kami setiap tahunnya <br> untuk di jadikan sebagai referensi warna pengecatan rumah Anda.</p>
  <div class="swiper swiper-2">
    <div class="swiper-wrapper">
    @foreach($tren->reverse() as $tt)
	  <a href="{{ route('tren.view', ['slug' => $tt -> slug]) }}" class="swiper-slide text-center text-dark">
      <div class="images">
      <div class="bg-light">
       <img src="{{ $tt->img }}" alt="" width="100%" class="">
       </div>
      </div>
	  	<p class="title-2 mb-0 mt-4 lead text-capitalize">Tren warna nusantara</p>
		  <p class="text-uppercase mb-0">{{ $tt->year }}</p>
      </a>
	  @endforeach
    </div>
    <div class="swiper-pagination mt-3" style="position:initial"></div>
  </div>
  </div>
  </section>
</div>
 
@endsection
@section('js')
<script>
// let SwiperTop = new Swiper('.swiper-2', {
//   spaceBetween: 30,
//   centeredSlides: true,
//   speed: 6000,
//   autoplay: {
//     delay: 1,
//   },
//   loop: true,
//   slidesPerView:3,
//   allowTouchMove: false,
//   disableOnInteraction: true,
//   breakpoints: {
//         640: {
//           slidesPerView: 1,
//           spaceBetween: 20,
//         },
//         768: {
//           slidesPerView: 1,
//           spaceBetween: 40,
//         },
//         1024: {
//           slidesPerView: 3,
//           spaceBetween: 50,
//         },
//       }
// });

var SwiperBot = new Swiper('.swiper-2', {
  spaceBetween: 30,
  loop:true,
  pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      }
    });
</script>
@endsection
@section('meta')
<meta property="og:title" content="Tren Warna" />
<meta property="og:url" content="{{ url('/tren-warna') }}" />
<meta property="og:description" content="Tren warna untuk inspirasi pengecatan rumah anda setiap tahunnya." />
<title>Tren Warna | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection