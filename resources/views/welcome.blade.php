<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/vue.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <trailers-carousel :movie-list="{{json_encode($movieList)}}"></trailers-carousel>
        </div>
        <div class="col-6 col-md-4">
          <movies-list :movie-list="{{json_encode($movieList)}}"></movies-list>
        </div>
      </div>
    </div>
    <hero-slider :movie-list="{{json_encode($movieList)}}"></hero-slider>
  </div>
</body>

</html>