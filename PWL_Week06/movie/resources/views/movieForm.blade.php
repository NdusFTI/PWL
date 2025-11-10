@extends('layouts.main')

@section('title', "Movie Form")

@section('content')
  <div class="card">
    <div class="card-header">
      Movie Form
    </div>
    <div class="card-body">
      <form action="/movie/add-movie" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="imdb" class="form-label">ImDb</label>
          <input type="text" class="form-control" name="imdb" id="imdb" required>
        </div>
        <div class="form-group">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="form-group">
          <label for="genre" class="form-label">Genre</label>
          <select name="genre" id="genre" class="form-control" required>
            <option value="#">--- Pilih Genre ---</option>
            <option value="Horor">Horor</option>
            <option value="Komedi">Comedi</option>
            <option value="Aksi">Aksi</option>
            <option value="Anime">Anime</option>
          </select>
        </div>
        <div class="form-group">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" name="year" id="year" min="1900" max="2500" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="poster" class="form-label">Poster</label>
          <input type="file" class="form-control" name="poster" id="poster" accept="image/+">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection