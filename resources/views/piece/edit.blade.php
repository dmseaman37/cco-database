@extends('layout')

@section('title', 'Repertoire')

@section('main')

<div class="row">
  <div class="col-3"></div>
	<div class="col-6">
  		<form action="" method="post">
  			@csrf
  			<div class="form-group">
  				<label for="composer">Composer</label>
      		<input type="text" id="composer" name="composer" class="form-control" value="{{$errors->first() == '' ? $piece->composer : old('composer')}}">
          <small class="text-danger">{{$errors->first('composer')}}</small>
  			</div>

  			<div class="form-group">
  				<label for="title">Title</label>
      		<input type="text" id="title" name="title" class="form-control" value="{{$errors->first() == '' ? $piece->title : old('title')}}">
          <small class="text-danger">{{$errors->first('title')}}</small>
  			</div>

  			<div class="form-group">
  				<label for="opus">Opus/Catalogue No.</label>
      		<input type="text" id="opus" name="opus" class="form-control" value="{{$errors->first() == '' ? $piece->opus_number : old('opus')}}">
          <small class="text-danger">{{$errors->first('opus')}}</small>
  			</div>

        <div class="form-group">
          <label for="movement">Movement</label>
          <input type="text" id="movement" name="movement" class="form-control" value="{{$errors->first() == '' ? $piece->movement : old('movement')}}">
          <small class="text-danger">{{$errors->first('movement')}}</small>
        </div>

  			<div class="form-group">
  				<label for="conductor">Conductor</label>
      		<input type="text" id="conductor" name="conductor" class="form-control" value="{{$errors->first() == '' ? $piece->conductor : old('conductor')}}">
          <small class="text-danger">{{$errors->first('conductor')}}</small>
  			</div>

  			<div class="form-group">
  				<label for="soloist">Soloist</label>
      		<input type="text" id="soloist" name="soloist" class="form-control" value="{{$errors->first() == '' ? $piece->soloist : old('soloist')}}">
          <small class="text-danger">{{$errors->first('soloist')}}</small>
  			</div>

  			<div class="form-group">
    			<label for="category">Category</label>
    			<select id="category" name="category" class="form-control" value="{{$errors->first() == '' ? $piece->category : old('category')}}">
    				<option selected disabled>-- Select One --</option>
            @foreach ($categories as $category)
              @if ($errors->first() == '')
                <option value="{{$category->id}}" {{$category->name == $piece->category ? "selected" : ""}}>
                  {{$category->name}}
                </option>
              @else
                <option value="{{$category->id}}" {{$category->name == old('category') ? "selected" : ""}}>
                  {{$category->name}}
                </option>
              @endif
            @endforeach
    			</select>
          <small class="text-danger">{{$errors->first('category')}}</small>
    		</div>

    		<div class="form-group">
    			<label for="concert">Date of Performance</label>
    			<select id="concert" name="concert" class="form-control" value="{{$errors->first() == '' ? $piece->date : old('concert')}}">
    				<option selected disabled>-- Select One --</option>
    				@foreach ($concerts as $concert)
              @if ($errors->first() == '')
                <option value="{{$concert->id}}" {{$concert->date == $piece->date ? "selected" : ""}}>
                  {{$concert->date}}
                </option>
              @else
      					<option value="{{$concert->id}}" {{$concert->date == old('concert') ? "selected" : ""}}>
                  {{$concert->date}}
                </option>
              @endif
    				@endforeach
    			</select>
          <small class="text-danger">{{$errors->first('concert')}}</small>
    		</div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-success">Reset</button>
      </form>
    </div>
  <div class="col-3"></div>
</div>

@endsection