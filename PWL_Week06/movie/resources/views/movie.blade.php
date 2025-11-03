@extends('layouts.main')

@section('title', "Movie")

@section('content')
  <div class="card">
    <div class="card-header">
      <a href="/movie/form" class="btn btn-primary"><i class="bi bi-plus"></i> Movie</a>
    </div>
    <div class="card-body">
      <table id="example" class="display" style="width: 100%;">
        <thead>
          <tr>
            <th>No</th>
            <th>ImDb</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Poster</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mv as $idx => $movie)
            <tr>
              <td>{{ $idx + 1 }}</td>
              <td>{{ $movie->imdb_id }}</td>
              <td>{{ $movie->title }}</td>
              <td>{{ $movie->genre }}</td>
              <td>{{ $movie->year }}</td>
              <td>
                @if($movie->poster)
                  <img src="{{ asset('storage/poster/' . $movie->poster) }}" alt="{{ $movie->title }}" width="80" height="80">
                @else
                  <img src="storage/poster/NoImage.jpg" alt="" width="80" height="80">
                @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection