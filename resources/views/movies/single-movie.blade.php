@extends('layouts.master')
@section('title', 'Single Movie Page')

@section('content')
    <div class="container border-bottom">
        @if ($movie)
        <h1>{{ $movie->title}}</h1>
        <p>Year: {{ $movie->year }}</p>
        <p><a href="/genres/{{$movie->genre}}">Genre: {{ $movie->genre }}</a></p>
        <p>Director: {{ $movie->director }}</p>
        <p>Storyline: {{ $movie->storyline }}</p>
        <br>
        @endif
    </div>

    @if (count($movie->comments))
    <div class="container">
        <h3>Comments: </h3>

        <ul class="list-unstyled">
            @foreach ($movie->comments as $comment)
                <li class="border-bottom">
                    <p>
                        {{ $comment->content }}
                        {{ $comment->created_at }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <h3>Create comment</h3>
        <form method="POST" action="{{ route('store.comment') }}">
            @csrf

            <div class="form-group">
                <label for="content">Comment: </label>
                <textarea name="content" id="content" class="form-control"></textarea>
                @include('partials.error-message', ['fieldTitle' => 'content']) 
            </div>
            <input type="hidden" name="movie_id" value="{{ $movie->id }}" />
        
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>    
@endsection