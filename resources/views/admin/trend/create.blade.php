@extends('layouts.app')
@section('content')
<div>
	<!-- Head -->
	<div class="d-flex justify-content-between">
	<div>
	<h4 class="mb-0 title-2">Tambah Tren</h4>
    <p>Halaman tambah tren warna</p>
	</div>
	<div>
          <ol class="breadcrumb p-0  bg-transparent text-uppercase font-13 title-1">
		    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('index.trend') }}">Tren</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
		  </ol>
	</div>
</div>
<div class="card p-4">
	@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
	<form action="{{ route('store.trend') }}" method="POST" enctype="multipart/form-data">
            {{ CSRF_FIELD() }}
            <div class="form-group">
              <div class="">
                <label for="">Judul Tren</label>
                <input required="" type="text" class="form-control" placeholder="Judul Tren" name="judul">
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Cover Gambar</label>
                <div class="input-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
				</div>
              </div>
              <div class="col">
                <label for="">Tahun Warna</label>
                <input type="text" name="year" class="form-control" placeholder="Masukan tahun">
              </div>
            </div>
			<div class="form-group mt-3">
				<label for="">Konten Tren</label>
				<textarea id="ane" class="form-control" cols="30" rows="10" name="konten"></textarea>
			</div>
            <div class="mt-5">
        		<button type="submit" class="btn btn-danger rounded-pill">Insert Now</button>
          </form>
	</div>
	</div>
	</div>
@endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<script>
      $('#ane').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 300
      });
    </script>
@endsection