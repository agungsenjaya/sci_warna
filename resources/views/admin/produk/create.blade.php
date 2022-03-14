@extends('layouts.app')
@section('content')
<div class="card p-4">
<!-- @foreach($oo as $o)
<p>{{ $o->kate_id }}</p>
@endforeach -->
<form action="{{ route('store.produk') }}" method="POST">
@csrf
<div class="row">
<div class="mb-3 col">
<label for="" class="form-label">Kategori Produk</label>
<select id="idpro" class="form-select" required>
    <option value="">Select Produk</option>
</select>
</div>
<div class="mb-3 col">
<label for="" class="form-label">Kategori Warna</label>
<select name="kate_id" id="" class="form-select" required>
    <option value="">Select Warna</option>
    @foreach($oo as $o)
    <option value="{{ $o->kate_id }}">{{ $o->kate_id }}</option>
    @endforeach
</select>
</div>
</div>
<div class="mb-3">
    <input type="hidden" class="form-control a1" name="judul" required>
    <input type="hidden" class="form-control a2" name="produk_id" required>
    <input type="hidden" class="form-control a3" name="brand_id" required>
</div>
    <button type="submit" class="btn btn-nasa btn-danger rounded-pill">Insert Now</button>
    </form>
</div>
@endsection
@section('js')
<script>
$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "https://www.sci-paint.com/api/auth/login",
        data:({
            email : 'scipaint@gmail.com',
            password: 'pdl6866128'
        }),
        success: function (res) {
            // === Start ===
            $.getJSON("https://www.sci-paint.com/api/products?token=" + res.token,
            function (data) {
                $.each(data, function (index, value) { 
                    $("#idpro").append(`
                    <option value="${value.id}">${value.judul}</option>
                    `);
                });
            });
            $('#idpro').on('change', function() {
                var nn = this.value;
                $.getJSON("https://www.sci-paint.com/api/products/"+nn+"?token=" + res.token,
                function (data) {
                    $('.a1').val(data.judul);
                    $('.a2').val(data.id);
                    $('.a3').val(data.brand_id);
                });
            });
            // === End ===
        }
    });
});
</script>
@endsection