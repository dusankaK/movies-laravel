<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use App\Movie;

use App\Comment;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;//radi  i kad obrisem, pitaj vanju?

    public function __construct() {
        $this->latest_movies = Movie::orderBy('id', 'desc')->take(5)->get();
        View::share('latest_movies', $this->latest_movies);
    }

}
