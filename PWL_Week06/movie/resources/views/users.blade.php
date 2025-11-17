@extends('layouts.main')

@section('title', "Movie")

@section('content')
  <div class="card">
    <div class="card-header">
      <a href="/users/form" class="btn btn-primary"><i class="bi bi-plus"></i> Users</a>
    </div>
    <div class="card-body">
      <!-- POP UP -->
      @if(session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session('alert') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <table id="example" class="display" style="width: 100%;">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($u as $idx => $user)
            <tr>
              <td>{{ $idx + 1 }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                @if($user->photo)
                  <img src="{{ asset('storage/photo/' . $user->photo) }}" alt="{{ $user->photo }}" width="80" height="80">
                @else
                  <img src="storage/poster/NoImage.jpg" alt="" width="80" height="80">
                @endif
              </td>
              <td>
                <a href="/users/delete-user/{{ $user->id }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection