@extends('index') 
@section('content') 

{!! $data2->konten !!}
 
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/tren.css') }}">
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script src="{{ asset('js/tren.js') }}"></script>
@endsection
@section('meta')
<meta property="og:title" content="{{ $data2->judul }}" />
<meta property="og:url" content="{{ url('/tren-warna/view') }}{{ '/' . $data2->slug }}" />
<meta property="og:description" content="{{ $data2->judul }} untuk inspirasi pengecatan rumah Anda." />
<title>{{ $data2->judul }} | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection