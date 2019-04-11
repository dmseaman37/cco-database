@extends('layout')

@section('title', 'Concerts')

@section('main')
<table class="table table-striped">
	<tr>
		<th>Venue</th>
		<th>Date</th>
	</tr>

	@foreach ($concerts as $concert)
	<tr>
		<td>
			{{$concert->venue}}
		</td>
		<td>
			<a href="/concerts/{{$concert->id}}">{{$concert->date}}</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection