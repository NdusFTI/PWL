@extends('layouts.main')

@section('title', "Change Password Form")

@section('content')
  <div class="card">
    <div class="card-header">
      Change Password Form
    </div>
    <div class="card-body">
      @if (session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session('alert') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <form action="/change/password" method="POST">
        @csrf
        <div class="form-group">
          <label for="currentPassword" class="form-label">Password Lama</label>
          <input type="password" class="form-control" name="currentPassword" id="currentPassword" required>
        </div>
        <div class="form-group">
          <label for="newPassword" class="form-label">Password Baru</label>
          <input type="password" class="form-control" name="newPassword" id="newPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection