@extends('layouts.main')

@section('title', "Edit Movie Form")

@section('content')
  <div class="card">
    <div class="card-header">
      Edit Movie Form
    </div>
    <div class="card-body">
      <form action="/movie/save-movie/{{ $mv->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="imdb" class="form-label">ImDb</label>
          <input type="text" class="form-control" name="imdb" id="imdb" value="{{ $mv->imdb_id }}" required>
        </div>
        <div class="form-group">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $mv->title  }}" required>
        </div>
        <div class="form-group">
          <label for="genre" class="form-label">Genre</label>
          <select name="genre" id="genre" class="form-control" required>
            <option value="#">--- Pilih Genre ---</option>
            <option value="Horor" {{ $mv->genre == 'Horor' ? 'selected' : '' }}>Horor</option>
            <option value="Komedi" {{ $mv->genre == 'Komedi' ? 'selected' : '' }}>Comedi</option>
            <option value="Aksi" {{ $mv->genre == 'Aksi' ? 'selected' : '' }}>Aksi</option>
            <option value="Anime" {{ $mv->genre == 'Anime' ? 'selected' : '' }}>Anime</option>
          </select>
        </div>
        <div class="form-group">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" name="year" id="year" min="1900" max="2500" value="{{ $mv->year }}" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="5" required>{{ $mv->description }}</textarea>
        </div>
        <div class="form-group">
          <label for="poster" class="form-label">Poster</label>
          <input type="file" class="form-control" name="poster" id="poster" accept="image/+">
        </div>
        <div class="form-group">
          @if($mv->poster)
              <img src="{{ asset('storage/poster/' . $mv->poster) }}" alt="{{ $mv->title }}" width="80" height="80">
            @else
              <img src="storage/poster/NoImage.jpg" alt="" width="80" height="80">
            @endif
            <br>
            <small><i>Foto Sebelumnya</i></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection