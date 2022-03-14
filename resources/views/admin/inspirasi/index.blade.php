@extends('layouts.app')
@section('content')
<section>
<div class="card p-4">
<table class="table" id="example">
		<thead class="title-3 text-uppercase bg-light">
			<tr>
				<th>ID</th>
				<th>Warna Count</th>
				<!-- <th>Actions</th> -->
			</tr>
		</thead>
		<tbody class="text-capitalize">
		@foreach($inspirasi as $inspirasi)
		<tr>
		<th>{{ $inspirasi->id }}</th>
		<td>{{ $inspirasi->brand_id }}</td>
		<!-- <td><a href="{{ route('edit.inspirasi',['id' => $inspirasi -> id]) }}" class="badge bg-primary w-100">edit</a></td> -->
		</tr>
		@endforeach
		</tbody>
		</table>
</div>
</section>
@endsection