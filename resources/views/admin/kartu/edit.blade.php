@extends('layouts.app')
@section('content')
<div>
  <div class="card p-4">
    <form action="{{ route('update.kartu', ['id' => $data -> id]) }}" method="POST" enctype="multipart/form-data">
            {{ CSRF_FIELD() }}
            <div class="mb-3">
              <div class="">
                <label for="" class="form-label">Judul Kartu Warna</label>
                <input required="" type="text" class="form-control" placeholder="Judul Kartu Warna" name="judul" value="{{ $data->judul }}">
              </div>
            </div>

            <div class="row">
				<div class="col-md">

				<div class="mb-3">
    <label for="" class="form-label">Gambar</label>
    <div class="position-relative">
    <input type="file" class="file-1 form-control" name="img" accept=".jpg,.jpeg,.png">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a1 hvr-input">
      <div>
        <span class="a2 opacity-50">Masukan Gambar</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill text-secondary"></i> 
        </div>
      </div>
    </div>
    </div>
  </div>
					</div>
				<div class="col-md">

				<div class="mb-3">
    <label for="" class="form-label">PDF</label>
    <div class="position-relative">
    <input type="file" class="file-2 form-control" name="pdf" accept=".pdf">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a3 hvr-input">
      <div>
        <span class="a4 opacity-50">Masukan Datateknis</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill text-secondary"></i> 
        </div>
      </div>
    </div>
    </div>
  </div>
					</div>
			</div>
            
            <div class="mb-3">
            <a href="javascript:void(0)"  class="btn btn-nasa rounded-pill btn-danger me-2" data-bs-toggle="modal" data-bs-target="#hapus">hapus kartu warna</a>
        <button type="submit" class="btn btn-nasa rounded-pill btn-light">update now</button>
          </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title text-uppercase">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
          <div class="modal-body">
            <p class="lead">Apakah anda yakin akan menghapus kartu warna <span class="text-danger">{{ $data -> judul }}</span>, file yang sudah dihapus tidak dapat dikembalikan lagi.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">tidak</button>
            <a  href="{{ route('delete.kartu', [ 'id' => $data -> id ]) }}" class="btn btn-danger rounded-pill">ya, hapus saja</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- End Modal -->
@endsection