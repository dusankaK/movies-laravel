<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre', $genre)->get(); //vraca filmove tog odredjenog zanra

        return view('movies.index', compact('movies'));

    }
}
