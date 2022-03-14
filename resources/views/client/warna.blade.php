  @extends('index')
@section('content')
<div class="py-3 bg-dark over-x">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
			<div class="me-3"><a class="text-white" href="/">warna</a>
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
<div class="min-vh-100 bg-light">
	<section class="space-m">
	<div class="container">
	<div class="sh-1 card">
	<div style="background:url('../img/hero-1.jpg');background-size:cover;background-position:center">
	<div class="text-white p-5 text-center">
						<h2 class="display-5 text-uppercase title-5 mb-0">Temukan warna</h2>
						<p class="h5">Dapatkan panduan warna terbaik untuk
							<br class="d-none d-sm-block"><span class="">pengecatan rumah Anda.</span>
						</p> 
						
					</div>
	</div>
		<div class="bg-dark py-3 small d-none" id="baking">
	<div class="container justify-content-center d-flex">
		<nav aria-label="breadcrumb" class="tabres">
			<ol class="breadcrumb bg-transparent mb-0 p-0 text-uppercase">
				<li class="breadcrumb-item"><a href="{{ route('index.home') }}" class="text-white">Kembali</a>
				</li>
			</ol>
		</nav>
	</div>
</div>
	<div class="row pt-4 aaa1 ">@foreach($aa as $aa) <a href="javascript:void(0)" class="mb-4 col-md-4 text-dark a{{ $aa->brand_id }}"> {{ $aa->brand_id }} </a> @endforeach</div>
		<div class="bb1 row"></div>
	</div>
	</div>
	</section>
</div>




@endsection
@section('js')
<script>
bas.show();
    $.ajax({
        type: "GET",
        url: "https://sci-paint.com/api/brands",
        data: "data",
        success: function (result1) {
            jok = result1;
                for (let iin = 0; iin < jok.length; iin++) {
                    var eem = jok[iin];
                    if ($('.a'+eem.id).length) {
                        $('.a'+eem.id).html(`<div class="p-4 p-0-mobile mt-mobile aa1" id="${eem.id}">
                        <div class="mks d-none">${eem.judul}</div>
                        <div class="media">
                        <i class="bi bi-grid-fill text-primary me-3 d-sm-none d-block"></i>
                        <div class="media-body">
                        <h4 class="mb-0 title-5 text-uppercase">${eem.judul}</h4>
                        <img src="https://sci-paint.com/img/palette.png" alt="" width="100%" height="8" class="d-none">
                        <p class="text-secondary">Eksplor warna untuk pengecatan <br> rumah anda.</p>
                        <div class="d-none d-sm-block">
                        <div class="btn btn-primary">Select Brands</div>
                        </div>
                        </div>
                        </div>
                      </div>`);
                    }
                }
                // =====
                var a;
                var b = [];
                $('.aa1').on('click',function(){
                    $('#baking').removeClass('d-none');
                  $('.aaa1').hide()
                    a = this.id;
                    bas.show();
                    $.ajax({
                        type: "GET",
                        url: "http://warna.sci-paint.com/api/products",
                        data: "data",
                        success: function (result2) {
                    for (let index = 0; index < result2.length; index++) {
                        const aam = result2[index];
                        if (aam.brand_id == a) {
                    $('.bb1').append(`<a href="http://warna.sci-paint.com/palet-warna/${aam.slug}" class="col-md-6 my-4 cc1 text-dark" id="${aam.brand_id}">
                    <div class="p-4 h-100 p-0-mobile">
                    <div class="media">
                    <i class="bi bi-grid-fill text-primary me-3 d-sm-none d-block"></i>
                      <div class="media-body">
                      <h4 class="text-uppercase title-5 mb-0">${aam.judul}</h4>
                      <p class="text-secondary mb-0">Warna <span class="text-capitalize">${aam.judul}</span></p>
                      <p class="text-secondary text-capitalize d-none d-sm-block">${result1[aam.brand_id - 1].judul}</p>
                      
                      <div class="d-none d-sm-block">
                        <div class="btn btn-primary">Select Product</div>
                      </div>
                      </div>
                    </div>
                    </div>
                  </a>`);
                }
                }
                },error: function(xhr) {
                  bas.show();
              }
                }).done(function(data){
                  bas.hide();
              });
                    
                });
            },error: function(xhr) {
              bas.show();
          }
            }).done(function(data){
              bas.hide();
          });
</script>
@endsection
@section('meta')
<meta property="og:title" content="Warna" />
<meta property="og:url" content="{{ url('') }}" />
<meta property="og:description" content="Dapatkan koleksi warna terbaik untuk cat rumah dan proyek anda." />
<title>Temukan Warna | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection