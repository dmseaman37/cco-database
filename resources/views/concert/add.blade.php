@extends('layout')

@section('title', 'Add a Concert')

@section('main')

<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
  		<form action="" method="post">
  			@csrf
  			<div class="form-group">
    			<label for="venue">Venue</label>
    			<select id="venue" name="venue" class="form-control" value="{{old('venue')}}">
    				<option selected disabled>-- Select One --</option>
    				@foreach ($venues as $venue)
    					<option value="{{$venue->id}}" {{$venue->id == old('venue') ? "selected" : ""}}>{{$venue->name}}</option>
    				@endforeach
    			</select>
          		<small class="text-danger">{{$errors->first('venue')}}</small>
    		</div>

    		<div class="form-group">
    			<label for="date">Date</label>
    			<input type="date" id="date" name="date" class="form-control">
    		</div>

    		<button type="submit" class="btn btn-success">Submit</button>
        	<button type="reset" class="btn btn-success">Clear</button>
  		</form>
  	</div>
  	<div class="col-3"></div>
</div>

@endsection