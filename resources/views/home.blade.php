@extends('layouts.app')
@php
function ress($data){
    $a = strlen($data);
    switch ($a) {
        case 1:
            echo '0' . $data;
            break;
        case 2:
            echo $data;
            break;
        case 3:
            echo $data;
            break;
        default:
            echo $data;
            break;
    }
}
@endphp
@section('content')
<div class="card-deck">
  <div class="card bg-primary text-white">
    <div class="card-header">
      <i class="bi bi-archive me-2"></i>Total produk
    </div>
    <div class="card-body">
      <h2>{{ ress(count($kartu)) }}</h2>
      <p class="card-text">Berikut total produk yang teindeks sistem</p>
    </div>
  </div>
  <div class="card bg-primary text-white">
  <div class="card-header">
      <i class="bi bi-bookmark-plus me-2"></i>Total Merek
    </div>
    <div class="card-body">
      <h2>{{ ress(count($produk)) }}</h2>
      <p class="card-text">Berikut total brands yang teindeks sistem</p>
    </div>
  </div>
  <div class="card bg-primary text-white">
  <div class="card-header">
      <i class="bi bi-collection me-2"></i>Total artikel
    </div>
    <div class="card-body">
      <h2>{{ ress(count($warna)) }}</h2>
      <p class="card-text">Berikut total artikel yang teindeks</p>
    </div>
  </div>
</div>
@endsection
