@extends('layouts.app')
@section('content')
<div class="modal-backdrop opacity-2 show fade z-in-1 mda" style="display:none !important"></div>
<section>
<div class="card p-4">
	@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
	<form action="{{ route('store.inspirasi') }}" method="POST" enctype="multipart/form-data">
            {{ CSRF_FIELD() }}
			<div class="mb-3">
    <label for="" class="form-label">Gambar Produk</label>
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
			<div class="mb-3">
                <label for="" class="form-label">Select Product</label>
				<select name="product_id" id="select1" name="product_id" class="form-select" required>
				<option value="">-- Select Product --</option>
				@foreach($produk as $pro)
				<option value="{{ $pro->id }}">{{ $pro->judul }}</option>
				@endforeach
				</select>
              </div>

			<div class="form-group">
				<label for="" class="form-label">Selected Color</label>

				<select class="form-control" id="select2" name="warna_id[]" multiple="multiple" required>
		  	@foreach($warna as $akk)
		  <option value="{{ $akk->id }}">
            <a href="javaript:void(0)" class="media list-group-item" id="{{ $akk->id }}">
            <div class="media">
            <div class="round-icon p-small bg-primary me-3">
              <div class="round-icon ricon-mobile" style="height:40px;width:40px;background-color:#{{ $akk->rgb }}"></div>
            </div>
              <div class="media-body align-self-center">
                <h5 class="ak1 mt-0 mb-1 text-dark">{{ $akk->judul }}</h5>
                <p class="ak2 mb-0 text-dark">{{ $akk->kode }}</p>
              </div>
              </div>
            </a>
		  </option>
            @endforeach
		</select>
			</div>
			
            <div class="mt-3">
        		<button type="submit" class="btn btn-danger rounded-pill insert">Insert Now</button>
				</div>
          </form>
	</div>
</section>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.0.2/list.min.js" integrity="sha512-MT5YyrGWqMGkIbwkVUZEWGrRDjlNx8loukEdFyzLo4s8INKVxnDQy2eFcpmnWGrFwJ+X8mRTQOJpWCayXz7+Og==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
// $('#loading').modal('show');
// $.ajax({
//   type: "POST",
//   url: "https://sci-paint.com/api/auth/login",
//     data:({
//         email : 'scipaint@gmail.com',
//         password: 'pdl6866128'
//       }),
//       cache: false,
//       global: true,
//     success: function (res1) {
//       $.getJSON(`https://sci-paint.com/api/warnas?token=` + res1.token,
//       function (res2) {
//         warnas = res2;
//     }).done(function(){
//       $('#loading').modal('hide');
//     }).fail(function(){
//       $('#loading').modal('show');
//     });
//   }
// });

// var values = $('#valcolor').val('1');
function cari(){
  $('#mds, .mda').show();
};
$('.mda').on('click',function(){
  $('#mds').hide();
  $(this).hide();
});
$(document).keyup(function(e) {
  if (e.key === "Escape") { // escape key maps to keycode `27`
    $('#mds, .mda').hide();
    $('input').blur();
 }
});
var options = {
    valueNames: [ 'ak1', 'ak2' ]
  };
  var userList = new List('users', options);
  $('#select2').select2();

  $('.insert').on('click', function() {
  });

  

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

</script>
@endsection