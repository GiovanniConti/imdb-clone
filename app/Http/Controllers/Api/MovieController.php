<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $movieList = Movie::all();
        return response()->json($movieList);
    }

    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();
        
        if (!$movie) {
            throw new HttpException('Movie not found');
        }

        return response()->json($movie);
    }
}
