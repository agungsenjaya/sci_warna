@extends('index')
@section('content')

<div class="d-flex align-items-center justify-content-center text-center  vh-100">
<div class="p-1">
	<img src="{{ asset('bicon/folder-minus.svg') }}" alt="" width="40%" class="mb-3 opacity-sm">
	<p class="lead text-secondary text-normali">Maaf halaman yang Anda maksud tidak ditemukan <br> harap periksa kembali url, Terima kasih.</p>
	<a href="{{ route('index.home') }}" title="" class="btn btn-primary rounded-pill">kembali ke awal</a>
	</div>
</div>

@endsection
@section('meta')
    <title>TIdak Ditemukan | SCI PAINT</title>
@endsection