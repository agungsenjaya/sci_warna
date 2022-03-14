@extends('layouts.app')
@section('content')
<div>

<!-- Head -->
<div class="d-flex justify-content-between">
	<div>
	<h4 class="mb-0 title-2">Trend warna</h4>
    <p>Halaman trend warna</p>
	</div>
	<div>
		  <a href="{{ route('create.trend') }}" class="btn btn-danger rounded-pill">Tambah Trend</a>
	</div>
</div>
<!-- End Head -->
<div class="card p-4">
	<table class="table" id="example">
	<thead class="title-3 text-uppercase bg-light">
			<tr>
				<th scope="col">No</th>
				<th class="bg-light">Judul</th>
				<th>Post Date</th>
				<th class="bg-light">Actions</th>
				<th>Review</th>
			</tr>
		</thead>
		<tbody class="text-capitalize">
			@foreach($trend as $gal)
			<tr>
				<th>{{ $gal->id }}</th>
				<td class="bg-light">{{ $gal->judul }}</td>
				<td>{{ $gal->created_at->format('d - M - Y') }}</td>
				<th class="bg-light"><a href="{{ route('edit.trend', [ 'id' => $gal -> id]) }}" title="">Edit</a></th>
				<td><a href="{{ url('/tren-warna/view/') .'/' . $gal->slug }}" target="_blank">Preview</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
    </div>
@endsection
@section('js')
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
@endsection