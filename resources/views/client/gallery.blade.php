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
						<h2 class="text-uppercase display-5 title-5 mb-0">Inspirasi warna</h2>
						<p class="title-1 lead">Dapatkan IDE warna rumah untuk<br><span class="d-none d-sm-block">pengecatan rumah Anda.</span></p> 
					</div>
				</div>
			</div>
			</div>
	</section>
    <section class="space-m">
    <div class="container">
    <div class="row">
    @foreach($gallery as $gal)
    <a href="javascrpit:void(0)" class="col-md-4 text-dark mb-3" data-bs-toggle="modal" data-bs-target="#warna-{{ $gal->id }}">
    <div class="card shadow-sm h-100">
        <img src="{{ $gal->img }}" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="title-5 text-uppercase text-center">{{ $gal->product->judul }}</p>
            <?php 
            $aku = ltrim($gal->warna_id, "[ ");
            $kamu = rtrim($aku, "] ");
            $kita = json_decode('[' . $kamu . ']', true);
            ?>
            <hr>
            <div class="row g-0 align-items-center d-flex justify-content-center">
            @foreach($kita as $kit)
            <div class="col-3">
            <div class="images">
            <div class="round-icon" style="width:100%;background-color:#{{ $warna[$kit - 1]->rgb }}">
            <img src="https://dummyimage.com/600x600" alt="" width="100%" class="op-0">
            </div>
            <div class="to-center align-items-center d-flex justify-content-center">
            <p class="font-12 m-0">
            {{ $warna[$kit - 1]->kode }}
            </p>
            </div>
            </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
    </a>
    <div class="modal fade" id="warna-{{ $gal->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <!-- <div class="modal-header border-0">
        <h5 class="modal-title text-capitalize" id="exampleModalLabel">{{ $gal->product->judul }}</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x"></i>
        </button>
      </div> -->
      <div class="modal-header">
        <h5 class="modal-title">Inspirasi Warna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-cs" style="background:url('{{ $gal->img }}');background-size:cover;height:200px;background-position:center"></div>

      <div class="row g-0 justify-content-center my-2">
            @foreach($kita as $kit)
            <div class="col-3">
            <div class="images">
            <div class="round-icon" style="width:100%;background-color:#{{ $warna[$kit - 1]->rgb }}">
            <img src="https://dummyimage.com/600x600" alt="" width="100%" class="op-0">
            </div>
            <div class="to-center align-items-center d-flex justify-content-center">
            <p class="font-10 m-0">
            {{ $warna[$kit - 1]->kode }}
            </p>
            </div>
            </div>
            </div>
            @endforeach
            </div>

            <p class="text-center">Dapatkan produk nya ditoko bangunan terdekar rumah anda</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <a href="https://www.sci-paint.com/product/view/{{ $gal->product->slug }}" class="btn btn-primary">View product</a>
      </div>
    </div>
  </div>
</div>
    @endforeach
    </div>
    </div>
    </section>
</div>

@endsection
@section('meta')
<meta property="og:title" content="Inspirasi Warna" />
<meta property="og:url" content="{{ url('/gallery') }}" />
<meta property="og:description" content="Dapatkan IDE warna rumah untuk pengecatan rumah Anda. Tersedia banyak inspirasi menarik didalamnya." />
<title>Inspirasi Warna | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection