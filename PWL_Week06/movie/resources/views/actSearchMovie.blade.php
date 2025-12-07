<!doctype html>
<html lang="en">
  <head>
    <title>Act Search Movie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 bg-info py-4"></div>
      </div>
    </div>  
    <div class="container pt-4">
      <div class="row">
        <div class="col-md-12 bg-info py-4">
          <div class="row">
            @foreach($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-4">
                @if ($movie->poster)
                  <img src="{{asset('storage/poster/' . $movie->poster)}}" alt="{{ $movie->title }}" class="card-img-top" height="200">
                @else
                  <img src="storage/foto/no_image.png" alt="{{ $movie->title }}" class="card-img-top" height="200">
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h5 class="card-title">{{$movie->genre}}</h5>
                  <h5 class="card-title">{{$movie->year}}</h5>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
