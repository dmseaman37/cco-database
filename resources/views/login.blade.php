@extends('layout')

@section('title', 'Login')

@section('main')
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <h1>Login</h1>
      <form method="post">
        @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input type="username" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
      </form>
    </div>
    <div class="col-3"></div>
  </div>
@endsection