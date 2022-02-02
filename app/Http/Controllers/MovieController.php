<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
      $movieList = Movie::all();
      $categoryList = Category::all();

      $filters = $request->query();
      
      $filteredData = Movie::with('category');

      // dd($filteredData);
      
      foreach ($filters as $filter) {
        if (!$filter) {
          continue;
        }


        $filteredData = $filteredData->whereHas('category', function (Builder $query) use ($filter) {
          $query->where('categories.id', $filter);
        });

      }
      
      $filteredData = $filteredData->get();

      // dd($filteredData);
    
      return view('welcome', [
        'movieList' => $movieList,
        'categoryList' => $categoryList,
        'filteredData' => $filteredData
      ]);
    }

    
}
