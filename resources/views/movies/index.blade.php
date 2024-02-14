<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
  <div class="container">
    <div class="row">
      @foreach ($movies as $movie)
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">Original Title: {{ $movie->original_title }}</p>
            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
            <p class="card-text">Date: {{ $movie->date }}</p>
            <p class="card-text">Vote: {{ $movie->vote }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>

</html>