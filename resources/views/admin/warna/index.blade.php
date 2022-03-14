@extends('layouts.app')
@section('content')
<section>
<div class="card p-4">
<table class="table" id="example">
		<thead class="title-3 text-uppercase bg-light">
			<tr>
				<th>ID</th>
				<th>Judul</th>
				<th>Kode</th>
				<th>RGB</th>
				<th>Kategori</th>
			</tr>
		</thead>
		<tbody class="text-capitalize">
			@foreach($warna as $data)
			<tr>
				<th>{{ $data->id }}</th>
				<td>{{ $data->judul }}</td>
				<td>{{ $data->kode }}</td>
				<td class="d-inline d-block"><span class="me-2 pe-3" style="background:#{{ $data->rgb }};"></span><span>#{{ $data->rgb }}</span></td>
                <td>
				<i class="bi bi-check-circle-fill me-2 text-primary"></i>{{ $data->kategori->judul }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    </div>
</section>
@endsection
@section('js')
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	});
</script>
@endsection