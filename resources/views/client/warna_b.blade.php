@php
$dd1 = count($data2) - 5;
$dd2 = $data2[$dd1]->id;
$dd3 = $data1->id + 5;
$dd4 = $data1->id + 7;
$dd5 = $data1->for_id;
@endphp
@extends('index')
@section('content')

<div class="py-3 bg-dark over-x">
	<div class="over-x-res px-20">
		<div class="d-flex text-uppercase sp-2 small justify-content-center">
			<div class="me-3"><a class="text-white" href="/">warna</a>
			</div>
			<div class="me-3"><a class="text-white" href="{{ url('/palet-warna') }}/{{ $data->slug }}">{{ $data->slug }}</a>
			</div>
			<div class="text-white opacity b11">{{ $data1->judul }}</div>
		</div>
	</div>
</div>
<div class="min-vh-100 bg-carbon">
	<section class="space-m">
		<div class="container">
			<div class="card">
				<div class="p-3 d-flex justify-content-end">
					<div class="a2a_kit text-center d-flex align-items-center">
					<a class="btn-primary btn-icon-2 a2a_button_whatsapp" style="padding-top: 10px;"> <i class="bi bi-whatsapp"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_facebook" style="padding-top: 10px;"> <i class="lab la-facebook-f"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_twitter" style="padding-top: 10px;"> <i class="bi bi-twitter"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_copy_link" style="padding-top: 10px;"> <i class="bi bi-share-fill"></i> </a>
						</div>
				</div>
				<div class="bg1 position-relative" style="background:#{{ $data1->rgb }}">
					<div class="row g-0 flex-column-reverse flex-md-row">
						<div class="col-md-4 bg1 align-self-end" style="background:#{{ $data1->rgb }}">
							<div class="h-100">
								<div class="p-4 position-relative z-in-2">
									<p class="mb-0 b12">{{ $data1->kode }}</p>
									<p class="mb-0 mt-2 b11 text-capitalize text-normali">{{ $data1->judul }}</p> <a href="javascript:void(0)" class="title-3 sp-1 text-dark a1 small">interior</a>  <a href="javascript:void(0)" class="title-3 sp-1 text-dark a2 small">interior / exterior</a>
								</div>
								<div class="">
									<div class="d-none d-sm-block m-4">
										<div class="row g-0 ">
											<div class="col-md">
												<div class="bg-white p-small round-icon">
													<div class="round-icon ricon-mobile b1 p-hand" id="{{ $data1->id }}" style="height:100px;width:100%;background-color:#{{ $data1->rgb }}"></div>
												</div>
											</div>@if($data1->id >= $dd2) @foreach($data2->random(5) as $ddi)
											<div class="col-md">
												<div class="bg-white p-small round-icon">
													<div class="round-icon ricon-mobile b1 p-hand" id="{{ $ddi->id }}" style="height:100px;width:100%;background-color:#{{ $ddi->rgb }}"></div>
												</div>
											</div>@endforeach @else @for($i=$data1->id; $i
											< $dd3; $i++) @php $amk=$warna[$i]; @endphp<div class="col-md">
												<div class="bg-white p-small round-icon">
													<div class="round-icon ricon-mobile b1 p-hand" id="{{ $amk->id }}" style="height:100px;width:100%;background-color:#{{ $amk->rgb }}"></div>
												</div>
										</div>@endfor @endif</div>
								</div>
								<div class="bg-white border">
									<ul class="nav title-6 nav-pills text-uppercase small sp-2 cardis" id="pills-tab" role="tablist">
										<li class="nav-item flex-fill bg1" role="presentation" style="background:#{{ $data1->rgb }};"> <a class="nav-link rounded-0 active" id="pills-lainnya-tab" data-bs-toggle="pill" href="#pills-lainnya" role="tab" aria-controls="pills-lainnya" aria-selected="true">lainnya</a>
										</li>
										<li class="nav-item flex-fill bg1" role="presentation" style="background:#{{ $data1->rgb }};"> <a class="nav-link rounded-0" id="pills-mirip-tab" data-bs-toggle="pill" href="#pills-mirip" role="tab" aria-controls="pills-mirip" aria-selected="false">serupa</a>
										</li>
										<li class="nav-item flex-fill bg1 mt-1-mobile" role="presentation" style="background:#{{ $data1->rgb }};"> <a class="nav-link rounded-0" id="pills-simpan-tab" data-bs-toggle="pill" href="#pills-simpan" role="tab" aria-controls="pills-simpan" aria-selected="false">simpan</a>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane h-100 show active" id="pills-lainnya" role="tabpanel" aria-labelledby="pills-lainnya-tab">
											<div class="list-group list-group-flush w-100 mt-1">@foreach($data2->random(3) as $ddi)
												<a href="javascript:void(0)" class="list-group-item text-dark b1 border border-white" id="{{ $ddi->id}}" style="background:#{{ $ddi->rgb }};">
													<p class="mb-0 title-2 small">{{ $ddi->kode }}</p>
													<p class="mb-0 text-capitalize">{{ $ddi->judul }}</p>
												</a>@endforeach</div>
										</div>
										<div class="tab-pane h-100" id="pills-mirip" role="tabpanel" aria-labelledby="pills-mirip-tab">
											<div class="row g-0 mt-1">@if($data1->id >= $dd2) @foreach($data2->random(7) as $ddi)
												<div class="col-md-4 col-3">
													<a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border border-white card sh-0 rounded-0 w-100 b1" id="{{ $ddi->id }}" style="background:#{{ $ddi->rgb }};height: 69px"></a>
												</div>@endforeach @else @for($i=$data1->id; $i
												< $dd4; $i++) @php $amk=$warna[$i]; @endphp<div class="col-md-4 col-3">
													<a href="javascript:void(0)" class="to-bold py-3 px-2 text-dark border border-white card sh-0 rounded-0 w-100 b1" id="{{ $amk->id }}" style="background:#{{ $amk->rgb }};height: 69px"></a>
											</div>@endfor @endif</div>
									</div>
									<div class="tab-pane h-100" id="pills-simpan" role="tabpanel" aria-labelledby="pills-simpan-tab">
										<div class="w-100 p-3" style="height:211px">
											<p class="text-normali"><span class="title-2">Simpan warna</span> untuk memudahkan anda dalam membeli produk.</p>
											<div class="d-flex flex-column"> <a href="javascript:void(0);" class="btn btn-primary  mb-4" id="snap">Simpan warna</a>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-3 d-none mt-mobile">
									<div class="media">
										<img alt="" class="border  me-3 img2 bg-light" width="50" id="{{ $data->produk_id }}">
										<div class="media-body">
											<p class="text-capitalize mb-0 title-1">{{ $data->judul }}</p>
											<p class="text-uppercase small mb-0 sp-2">{{ $data->ktt }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>@if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
				<div class="col-md-8 align-self-end">
					<div class="position-relative">
						<div class="swiper slider-1 h-100">
							<div class="swiper-wrapper">@foreach($a as $a)
								<div class="swiper-slide">
									<div style="background:#{{ $data1->rgb }}" class="bg1">
										<img src="/img/simulasi/{{ basename($a) }}" width="100%" alt="" class="swiper-lazy">
										<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
									</div>
									<!-- <div class="" style="background:url('https://dummyimage.com/6900x400');background-size:cover; background-position:center bottom"></div> -->
								</div>@endforeach</div>
						</div>
					</div>
					<div>
						<div class="swiper gallery-thumbs position-relative">
								<div class="swiper-wrapper">
									@foreach($b as $b) 
									<a href="javascript:void(0)" class="swiper-slide text-dark"><div style="background:#{{ $data1->rgb }}" class="bg1"><div class="position-relative"> <img src="/img/simulasi/{{ basename($b) }}" width="100%" alt="" class="swiper-lazy border"><div class="to-center align-items-center justify-content-center d-flex text-center"> <i class="fa fa-check-circle dconn"></i></div><div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div></div></div> </a> 
									@endforeach
								</div>

								<div class="d-none d-sm-block next to-right" style="z-index:1;top:30%">
								<div class="px-1 py-2 bg-primary">
									<i class="bi bi-chevron-right text-white"></i>
								</div>
							</div>
							<div class="d-none d-sm-block prev to-left" style="z-index:1;top:30%">
								<div class="px-1 py-2 bg-primary">
								<i class="bi bi-chevron-left text-white"></i>
								</div>
							</div>
								
						</div>
					</div>
				</div>@else
				<div class="col-md-8">
					<div style="background:#{{ $data1->rgb }}" class="bg1 h-100 border-white border-start border-bottom vh-80-res">
						<div class="p-4 text-end z-in-2 position-relative d-sm-block d-none"> <a href="javascript:void(0)" id="abd" class="btn btn-primary"><i class="bi bi-chevron-up me-2 tp"></i><i class="bi bi-chevron-down me-2 dn"></i>Preview Full</a>
						</div>
					</div>
				</div>@endif
				</div>
				<div class="grad-odd bg1 border-bottom border-white" id="ebd" style="background:#{{ $data1->rgb }}"></div>
		</div>
		<div class="p-2 bg1" style="background:#{{ $data1->rgb }};">
			<div class="row center-mobile">
				<div class="col-md-2">
					<img alt="" class="img2 w-50-mobile" width="100%" id="{{ $data->produk_id }}">
				</div>
				<div class="col-md-4 offset-md-1 align-self-center mt-1-mobile text-center text-sm-start">
					<p class="title-2 text-capitalize mb-0 text-normali">{{ $data->judul }}</p>
					<p class="text-uppercase sp-2 small">{{ $data->ktt }}</p>
				</div>
				<div class="col-md-3 offset-md-2 align-self-center text-center text-sm-end">
					<div class=" m-3"> <a target="_blank" href="https://www.sci-paint.com/product/view/{{ $data->slug }}" class="btn btn-primary  btn-block">lihat produk</a>
					</div>
				</div>
			</div>
		</div>
		<div class="">
			<div class=" p-4">
			<p class="text-center text-smali m-0">Warna sebenarnya mungkin berbeda dari representasi di layar. Untuk mengkonfirmasi pilihan warna
				<span class="d-none d-sm-block"></span>Anda sebelum membeli, silakan lihat chip warna fisik, <a href="/palet-warna" target="_blank"><u> kartu warna</u></a>, atau sampel yang dicat.</p>
			</div>
		</div>
</div>
</div>
</section>
</div>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-uppercase" id="exampleModalLabel">Notifications</h5> 
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i class="fal fa-times opacity"></i> 
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<a href="" class="btn"> <i class="bi bi-file-earmark-pdf-fill  mb-3 text-primary"></i>
							<div class="line-small">Simpan Warna
								<br> <span class="small text-secondary">FORMAT PDF</span>
							</div>
						</a>
					</div>
					<div class="col-md-6 border-start">
						<a href="" class="btn"> <i class="fa fa-image-polaroid  mb-3 text-primary"></i>
							<div class="line-small">Simpan Warna
								<br> <span class="small text-secondary">FORMAT JPG</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="kategori" tabindex="-1" role="dialog" aria-labelledby="kategoriLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-to-center" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-uppercase" id="kategoriLabel">notifications</h5> 
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <i class="fal fa-times fa-sm"></i> 
				</button>
			</div>
			<div class="modal-body">
				<div class="aa1">Warna ini hanya di rekomendasikan untuk interior rumah saja.</div>
				<div class="aa2">Warna ini bisa digunakan untuk interior / exterior rumah Anda.</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="oko" style="display:none">
		<div id="capture">
			<div id="img-out">
				<div class="card">
					<div class="p-2">
						<div class="row g-0">
							<div class="col-md-6">
								<div class="bg1 " style="background:#{{ $data1->rgb }}">
									<div class="">
									@if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
										<img src="{{ asset('img/iin.png') }}" width="100%" alt="" class="">
										@else
										<div style="height:45vh"></div>
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-6 align-self-center mt-mobile">
								<div class="px-4">
									<div class="">
									  @if($data->ktt == 'cat tembok tinting' || $data->ktt == 'cat tembok')
										<div class="mb-2 text-uppercase small title-5">
											<div class="aa1">interior</div>
											<div class="aa2">interior / exterior</div>
										</div>
										@endif
										<p class="text-capitalize title-2 mt-1-mobile">{{ $data->judul }}</p>
										<hr class="hr-save">
										<div class="media">
											<div class="bg1 me-3 rd-color border" style="background:#{{ $data1->rgb }}">
												<div class="cardi"></div>
											</div>
											<div class="media-body align-self-center">
												<p class="mb-0 b11 text-capitalize title-6">{{ $data1->judul }}</p>
												<p class=" b12 mb-0 title-1">{{ $data1->kode }}</p>
											</div>
										</div>
									</div>
									<hr class="hr-save">
									<p class="small">Tunjukan gambar ini ke toko bangunan terdekat rumah anda untuk membeli produk {{ $data->judul }}.</p>
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
  border: 1px solid #111 !important;
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
<script>
	// Wanra B
	var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: false,
    lazy: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.next',
      prevEl: '.prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 3.4,
        spaceBetween: 0,
      },
      320: {
        slidesPerView: 3.4,
        spaceBetween: 0,
      }
    }
  });
var swiper = new Swiper('.slider-1', {
    loop:false,
    speed: 1,
    lazy: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay:false,
    allowTouchMove: false,

    on: {
      slideChange: function() {
        // console.log(this.realIndex);
        // $('.real-index').html(this.realIndex);
      }
    },

    effect:'slide',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    thumbs: {
      swiper: galleryThumbs
    },
    breakpoints: {
      1024: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
  });

$('.closen').on('click',function(){
  $("#hid").hide();
});
var aas = $('.img2').attr('id');
bas.show();

      $.getJSON(`https://sci-paint.com/api/products/${aas}`,
      function (res2) {
        $('.img2').attr('src',res2.img);
    }).done(function(){
      bas.hide();
    }).fail(function(){
      bas.show();
    });

      $.getJSON(`http://warna.sci-paint.com/api/warnas`,
      function (res2) {
        warnas = res2;
    }).done(function(){
      bas.hide();
    }).fail(function(){
      bas.show();
    });
  

$('#ebd, .tp').hide();

$( "#abd" ).click(function() {
  var wasVisible = $("#ebd").is(":visible");
  $(".tp").hide();
  $(".dn").show();
  $( "#ebd" ).toggle( "slow", function() {
  if (!wasVisible) {
    $(".tp").show();
    $(".dn").hide();
  }
  });
});

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
a2a_config.icon_color = "rgb(108 108 108)";
a2a_config.locale = "id";

$('.b1').on('click', function(){
  var ons = $(this).attr('id');
  for (let index = 0; index < warnas.length; index++) {
    let ele = warnas[index];
    if (ele.id == ons) {
      var lk = "http://warna.sci-paint.com/palet-warna/" + '<?php echo $data->slug; ?>' + "/" + ele.slug;
      window.history.pushState('obj', 'newtitle', lk);
      $('.b11').text(ele.judul);
      jd = ele.judul;
      kd = ele.kode;
      $('title').text('Warna' + ' - ' + ele.judul);
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
<meta property="og:title" content="{{ $data1->judul }}" />
<meta property="og:url" content="{{ url('') }}/palet-warna/{{ $data->slug }}/{{ $data1->slug }}">
<title>Warna - {{ $data1->judul }}</title>
@endsection