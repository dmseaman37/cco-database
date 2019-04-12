@extends('layout')

@section('title', 'Repertoire')

@section('main')

<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
		<table class="table">
			<tr>
				<th>Composer: </th>
				<td>{{$piece->composer}}</td>
			</tr>

			<tr>
				<th>Title: </th>
				<td>{{$piece->title}}</td>
			</tr>

			<tr>
				<th>Movement: </th>
				<td>{{$piece->movement}}</td>
			</tr>

			<tr>
				<th>Opus/Catalogue: </th>
				<td>{{$piece->opus_number}}</td>
			</tr>

			<tr>
				<th>Category: </th>
				<td>{{$piece->category}}</td>
			</tr>

			<tr>
				<th>Conductor: </th>
				<td>{{$piece->conductor}}</td>
			</tr>

			<tr>
				<th>Soloist: </th>
				<td>{{$piece->soloist}}</td>
			</tr>

			<tr>
				<th>Date Performed: </th>
				<td>{{$piece->date}}</td>
			</tr>
		</table>
	</div>
	<div class="col-4"></div>
</div>

<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
		<a class="btn btn-success" href="#">Edit</a>
		<a class="btn btn-danger" href="#">Delete</a>
	</div>
	<div class="col-4"></div>
</div>

@endsection