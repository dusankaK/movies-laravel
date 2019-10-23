@extends('layouts.master')
@section('title', 'Movies Page')

@section('content')
    <div class="container">
        @if($movies)
        <h3>Movies</h3>
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <a href="/movies/{{ $movie->id }}"><h4>{{ $movie -> title}}</h4></a>
                        <p>{{ $movie -> storyline}}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
