@extends('layouts.main')

@section('title', "Home")

@section('content')
  @if(session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ session('alert') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <h3>HOME</h3>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
@endsection