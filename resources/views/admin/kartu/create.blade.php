@extends('layouts.app')
@section('content')
<section>
<div class="card p-4">
<form action="{{ route('store.kartu') }}" method="POST" enctype="multipart/form-data">
            {{ CSRF_FIELD() }}
            <div class="mb-3">
              <div class="">
                <label for="" class="form-label">Judul Kartu Warna</label>
                <input required type="text" class="form-control" placeholder="Judul Kartu Warna" name="judul">
              </div>
            </div>

            <div class="row">
				<div class="col-md">

				<div class="mb-3">
    <label for="" class="form-label">Gambar</label>
    <div class="position-relative">
    <input type="file" class="file-1 form-control" name="img" required accept=".jpg,.jpeg,.png">
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
    <input type="file" class="file-2 form-control" name="pdf" required accept=".pdf">
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
			<button type="submit" class="btn rounded-pill btn-nasa btn-danger">Insert Now</button>
          </form>
		  </div>
		  </div>
</section>
@endsection
@section('js')
<script>
  $('.a1').on('click', function(){
        $('.file-1').trigger('click');
      });

      $(".file-1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a2').text(fileName);
        }else{
          $('.a2').text('Masukan Gambar');
        }
      });
      
      $('.a3').on('click', function(){
        $('.file-2').trigger('click');
      });

      $(".file-2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a4').text(fileName);
        }else{
          $('.a4').text('Masukan Datateknis');
        }
      });
</script>
@endsection