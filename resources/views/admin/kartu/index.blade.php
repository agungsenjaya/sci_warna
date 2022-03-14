@extends('layouts.app')
@section('content')
<section>
<div class="card p-4">
<table class="table" id="example">
		<thead class="title-3 text-uppercase bg-light">
			<tr>
				<th>ID</th>
				<th class="bg-light">Judul</th>
				<th>Images</th>
				<th class="bg-light">Actions</th>
			</tr>
		</thead>
		<tbody class="text-capitalize">
		@foreach($kartu as $kartu)
		<tr>
		<th>{{ $kartu->id }}</th>
		<td>{{ $kartu->judul }}</td>
		<td>Images</td>
		<td><a href="{{ route('edit.kartu',['id' => $kartu -> id]) }}" class="badge bg-primary w-100">Edit</a></td>
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