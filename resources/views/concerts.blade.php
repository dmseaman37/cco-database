@extends('layout')

@section('title', 'Concerts')

@section('main')
<table class="table table-striped">
	<tr>
		<th>Venue</th>
		<th>Date</th>
		@if(Auth::check())
		<th></th>
		@endif
	</tr>

	@foreach ($concerts as $concert)
	<tr>
		<td>
			{{$concert->venue}}
		</td>
		<td>
			<a href="/concerts/{{$concert->id}}">{{$concert->date}}</a>
		</td>
		@if(Auth::check())
		<td>
			<a class="btn btn-danger" href="/concerts/delete/{{$concert->id}}">Delete</a>
		</td>
		@endif
	</tr>
	@endforeach
</table>
@endsection