@extends('layout')

@section('title', 'CCO Database')

@section('main')
<div class="row buttons">
	<div class="col-4">
		<a href="/pieces" class="btn btn-primary btn-lg">
			Search Repertoire
		</a>
	</div>

	<div class="col-4">
		<a href="/concerts" class="btn btn-primary btn-lg">
			View All Concerts
		</a>
	</div>

	<div class="col-4">
		<a href="#" class="btn btn-primary btn-lg">
			Log In
		</a>
	</div>
</div>
@endsection