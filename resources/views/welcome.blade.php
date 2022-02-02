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
      <h3 class="my-3">Filtri</h3>
      <form class="mb-5" action="" method="get">
  
        <select name='categories[]' multiple>
          @foreach($categoryList as $category)
            <option value='{{$category->id}}' {{ Request::query('categories') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
        
        <button>Invia</button>
      </form>

      <ul>
      @foreach ($filteredData as $data)
        <li>
          {{$data->title}}
        </li>
      @endforeach
      </ul>

      <hero-slider :movie-list="{{json_encode($movieList)}}"></hero-slider>
    </div>


  </div>
</body>

</html>