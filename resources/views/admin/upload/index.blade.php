@extends('layouts.app')
@section('content')
<div>
	<!-- Head -->
	<div class="d-flex justify-content-between">
		<div>
			<h6 class="mg-b-0 tx-spacing--1">Upload Gambar</h6>
		</div>
		<div>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb bl-admin bg-transparent">
			    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Upload Gambar</li>
			  </ol>
			</nav>
		</div>
	</div>
	<hr>
    <div class="mt-3 p-3 bg-whites">
    <form action="{{ route('store.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" required="" name="img">
        </div>
        <div class="form-group">
            <label for="">Kategori Ruangan</label>
            <select name="kategori" required="" class="form-control">
                <option value="">-- Select this one --</option>
                <option value="bedrooms">bedrooms</option>
                <option value="dining">dining</option>
                <option value="eksterior">eksterior</option>
                <option value="living">living</option>
            </select>
        </div>
        <button type="submit" class="btn btn-nasa bg-default-1 text-white">Insert Now</button>
    </form>
    </div>
    </div>
@endsection