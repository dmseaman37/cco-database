@extends('layout')

@section('title', 'Repertoire')

@section('main')
<table class="table table-striped">
	<tr>
		<th>Composer</th>
		<th>Title</th>
		<th>Movement</th>
		<th>Opus/Catalogue No.</th>
		<th>Performance Details</th>
	</tr>

	@foreach ($pieces as $piece)
	<tr>
		<td>
			{{$piece->composer}}
		</td>
		<td>
			{{$piece->title}}
		</td>
		<td>
			{{$piece->movement}}
		</td>
		<td>
			{{$piece->opus_number}}
		</td>
		<td>
			<a class="btn btn-primary" href="/pieces/{{$piece->id}}">See Details</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection