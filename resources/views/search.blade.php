@extends('layout')

@section('title', 'Search')

@section('main')

<div class="row">
  <div class="col-3"></div>
	<div class="col-6">
  		<form action="" method="post">
  			@csrf
  			<div class="form-group">
  				<label for="composer">Composer</label>
      			<input type="text" id="composer" name="composer" class="form-control" value="{{old('composer')}}">
  			</div>

  			<div class="form-group">
  				<label for="title">Title</label>
      			<input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
  			</div>

  			<div class="form-group">
  				<label for="opus">Opus/Catalogue No.</label>
      			<input type="text" id="opus" name="opus" class="form-control" value="{{old('opus')}}">
  			</div>

  			<div class="form-group">
  				<label for="conductor">Conductor</label>
      			<input type="text" id="conductor" name="conductor" class="form-control" value="{{old('conductor')}}">
  			</div>

  			<div class="form-group">
  				<label for="soloist">Soloist</label>
      			<input type="text" id="soloist" name="soloist" class="form-control" value="{{old('soloist')}}">
  			</div>

  			<div class="form-group">
      			<label for="category">Category</label>
      			<select id="category" name="category" class="form-control" value="{{old('category')}}">
      				<option selected disabled>-- Select One --</option>
      				@foreach ($categories as $category)
      					<option value="{{$category->id}}" {{$category->id == old('category') ? "selected" : ""}}>{{$category->name}}</option>
      				@endforeach
      			</select>
    		</div>

    		<div class="form-group">
      			<label for="concert">Concert</label>
      			<select id="concert" name="concert" class="form-control" value="{{old('concert')}}">
      				<option selected disabled>-- Select One --</option>
      				@foreach ($concerts as $concert)
      					<option value="{{$concert->id}}" {{$concert->id == old('concert') ? "selected" : ""}}>{{$concert->date}}</option>
      				@endforeach
      			</select>
      		</div>

  			<button type="submit" class="btn btn-success">Search</button>
    		<button type="reset" class="btn btn-success">Clear</button>
  		</form>
      <a class="btn btn-info" href="/piece/add">Add a piece</a>
      <a class="btn btn-info" href="#">Add a concert</a>
  	</div>
    <div class="col-3"></div>
</div>

@endsection