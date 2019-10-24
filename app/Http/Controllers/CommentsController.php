<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\Comments;

class CommentsController extends Controller
{
    public function store(Comments $request)
    {
        $movie = Movie::find($request->movie_id);
        $movie->comments()->create($request->all());
    
        return redirect()->route('movies.single-movie', ['id' => $request->movie_id]);
    }
}
