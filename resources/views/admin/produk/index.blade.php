@extends('layouts.app')
@section('content')
<section>
<div class="card p-4">
<table class="table" id="example">
		<thead class="title-3 text-uppercase bg-light">
			<tr>
				<th>ID</th>
				<th>Judul</th>
				<th>Warna</th>
			</tr>
		</thead>
		<tbody class="text-capitalize">
			@foreach($produk as $data)
			<tr>
				<th>{{ $data->id }}</th>
				<td>{{ $data->judul }}</td>
				<td>
				@php
				$fins = DB::table('warnas')->where('kate_id', '=', $data->kate_id)->get();
				echo count($fins)
				@endphp
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