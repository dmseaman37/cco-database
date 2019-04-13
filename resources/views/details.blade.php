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
		<form action="" method="post">
			@csrf
			<input type="hidden" id="delete" name="delete" class="form-control" value="{{$piece->id}}">
			<button class="btn btn-danger" type="submit">Delete</button>
			<a class="btn btn-success" href="#">Edit</a>
		</form>
	</div>
	<div class="col-4"></div>
</div>

<script>
	document.querySelector(".btn-danger").onclick = function(){
		console.log("click");
		confirm("Are you sure you want to delete this piece?");
	};
</script>

@endsection