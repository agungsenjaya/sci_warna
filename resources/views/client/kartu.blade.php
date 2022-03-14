@extends('index')
@section('content')

<div class="py-3 bg-dark over-x">
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
			<div class="position-relative">
    <div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
			<div class="to-center">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="text-uppercase display-5 title-5 mb-0">Kartu Warna Produk</h2>
						<p class="title-1 lead">Dapatkan kartu warna terbaru seputar produk sci paint <br><span class="d-none d-sm-block">Temukan inspirasi menarik didalamnya.</span></p> 
					</div>
				</div>
			</div>
			</div>
	</section>
	<div id="start">
  <section class="bg-light">
		<div class="container">
			<nav class="position-relative tabres">
				<ul class="nav nav-tabs nav-justified hidden-xs text-uppercase text-center title-5 d-flex" id="myTab" role="tablist">
					<li class="nav-item flex-fill" role="presentation"> <a class="nav-link py-3 active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Kartu Warna</a>
					</li>
					<li class="nav-item flex-fill" role="presentation"> <a class="nav-link py-3" id="search-tab" data-bs-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">Pencarian</a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
		<section class="space-m bg-white" id="kartu">
			<div class="container">
				<div class="col-md-8 offset-md-2">
        <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="pills-all-tab">
  <div class="aka">
						<div class="aki gallery">@foreach($kartu as $kart)
							<div class="mb-5">
								<div class="p-2">
									<div class="media flex-column flex-sm-row">
										<div class="bg-light me-0 me-sm-5 card-cs">
											<div class="position-relative item">
												<img src="{{ $kart->img }}" alt="" class="card-cs img" width="200">
												<div class="grad-img"></div>
											</div>
										</div>
										<div class="media-body mt-mobile">
											<div class="d-flex justify-content-start justify-content-sm-between">
												<div></div>
												<div class="mt-2 mt-sm-0">
													<div class="badge bg-primary">{{ $kart->created_at->format('d M Y') }}</div>
												</div>
											</div>
											<hr class="">
											<div class="center-mobile">
												<h4 class="title-6 text-uppercase">{{ $kart->judul }}</h4>
												<p class="">Dapatkan kartu warna online produk {{ $kart->judul }} untuk inspirasi pengecatan.</p> <a href="{{ $kart->pdf }}" class="btn btn-primary  mb-mobile w-res-100">Download file</a>
											</div>
										</div>
									</div>
								</div>
							</div>@endforeach {{ $kartu->links() }}</div>
					</div>
  </div>
  <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="pills-search-tab">
  <!-- <div class="row">
						<div class="col-md-12">
								<div class="input-group bg-light ">
									<input type="text" class="form-control bg-transparent border-0 place-bold" placeholder="Cari kartu warna" aria-label="searching" aria-describedby="addon-wrapping" name="inn" />
									<div class="input-group-append">
										<button class="btn" disabled type="button" id="button-addon1">
											<img src="{{ asset('img/search.svg') }}" width="20" alt="" class="opacity" />
										</button>
									</div>
								</div>
						</div>
					</div> -->

					<!-- Algolia -->
          <div class="search-box">
          <div class="">
            <div id="searchbox" class="mb-4"></div>
            </div>
            <div id="hitss"></div>
          </div>
					<!-- End Algolia -->

  </div>
</div>

				</div>
			</div>
		</section>
	</div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2/dist/instantsearch.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2/dist/instantsearch-theme-algolia.min.css">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
<script>
$('ul.pagination').hide();
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


    let SwiperTop = new Swiper('.swiper-2', {
  spaceBetween: 30,
  centeredSlides: true,
  speed: 6000,
  autoplay: {
    delay: 1,
  },
  loop: true,
  slidesPerView:3,
  allowTouchMove: false,
  disableOnInteraction: true,
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

    
    $(".kartu").click(function() {
    $('html,body').animate({
              scrollTop: $("#kartu").offset().top - 65},
              1000);
	  });
	  
	// === Algolia Search ===
  /* global instantsearch algoliasearch */
  
  $('input[name=inn]').keyup(function() {
    $('.ais-SearchBox-input').val($(this).val());
  });

  function opak(a){
    var bb = a.toUpperCase();
    return bb;
  }

const search = instantsearch({
  indexName: 'kartus',
  searchClient: algoliasearch('HULN1BXUHU', '7cb5e7ebb689098973e0b84e94b7f3c3'),
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
    placeholder: "Pencarian kartu warna",
  }),
  instantsearch.widgets.hits({
    container: document.querySelector("#hitss"),
    // templates: {
    //   item: `
    //   <div class="mb-5">
		// 						<div class="p-2">
		// 							<div class="media flex-column flex-sm-row">
		// 								<div class="bg-light me-5 me-0-mobile border">
		// 									<div class="position-relative">
		// 										<img src="https://dummyimage.com/700x950" alt="@{{{ judul }}}" width="200" class="w-mobile opacity-0">
		// 										<div class="grad-img"></div>
		// 									</div>
		// 								</div>
		// 								<div class="media-body mt-mobile">
		// 									<div class="d-flex justify-content-between">
		// 										<div></div>
		// 										<div>
													
		// 										</div>
		// 									</div>
		// 									<hr class="">
		// 									<div class="center-mobile">
		// 										<h4 class="title-2 text-uppercase">@{{{ judul }}}</h4>
		// 										<p class="">Dapatkan kartu warna online produk @{{{ judul }}} untuk inspirasi pengecatan.</p> <a href="@{{{ pdf }}}" class="btn btn-primary  mb-mobile">Download file</a>
		// 									</div>
		// 								</div>
		// 							</div>
		// 						</div>
		// 					</div>
    //   `,
    // },
    templates: {
      empty: `<div class="px-4 d-none"><div class="media">
      <i class="fa fa-microphone-slash me-3 fa-2x opacity-lg align-self-center"></i>
      <div class="media-body">
	<p class="text-secondary text-normali mb-0">Maaf kami tidak bisa menemukan kata kunci yang anda cari <br> coba periksa kembali dengan benar, Terima kasih.</p>
	</div>
</div></div>`,
      item: `
        <a href="@{{{ pdf }}}" class="text-dark">
        <div class="d-flex justify-content-between">
        <div>
        <p class="title-5 text-dark text-uppercase mb-0">@{{{ judul }}}</p>
        <p class="small mb-0 text-primary"><i class="bi bi-file-earmark-pdf-fill me-2"></i>Download</p>
        </div>
        <div>
        <div class="p-2 badge bg-primary  px-2">@{{{ tgl }}}</div>
        </div>
        </div>
        </a>
      `
    }

  }),
]);

search.start();

	// === End Algolia Search ===
</script>
@endsection
@section('meta')
<meta property="og:title" content="Kartu Warna" />
<meta property="og:url" content="{{ url('/kartu-warna') }}" />
<meta property="og:description" content="Download kartu warna produk semua produk cat sci paint untuk kebutuhan inpirasi pengecatan dan proyek Anda." />
<title>Kartu Warna | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection