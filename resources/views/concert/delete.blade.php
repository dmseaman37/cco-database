@extends('layout')

@section('title', 'Delete Concert')

@section('main')
<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
		<form action="" method="post" id="delete">
			@csrf
			<h2>Are you sure you want to delete this concert?</h2>
			<div class="row">
				<button class="btn btn-danger" type="submit">Confirm</button>
				<a class="btn btn-success" href="/concerts">Back</a>
			</div>
		</form>
	</div>
	<div class="col-3"></div>
</div>
@endsection