<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;



class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));    
    }

    public function show($id)
    {
        $movie = Movie::findorFail($id);
        return view('movies.single-movie', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }
    
}
