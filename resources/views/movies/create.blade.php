@extends('layouts.master')
@section('title', 'Create new movie');

@section('content')
    <div class="container">
        <h3 class="jumbotron-heading">Create new movie</h3>
        <form method="" action="">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title"> 
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" name="genre" id="genre"> 
            </div>

            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" name="director" id="director"> 
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year"> 
            </div>

            <div class="form-group">
                <label for="storyline">Storyline</label>
                <input type="text" class="form-control" name="storyline" id="storyline"> 
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Movie</button>
            </div>

        </form>    



    </div>    
@endsection