@extends('layouts.main')

@section('title', "User Form")

@section('content')
  <div class="card">
    <div class="card-header">
      User Form
    </div>
    <div class="card-body">
      <form action="/users/add-user" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
          <label for="photo" class="form-label">Photo</label>
          <input type="file" class="form-control" name="photo" id="photo" accept="image/+">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection