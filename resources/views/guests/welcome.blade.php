@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center text-light title_section">Movies</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4 text-center p-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card p-3 shadow bg_card">
                        <h4 class="movie_title"> {{ $movie->title }}</h4>
                        <hr>
                        <h5 class="text-dark">Original title:</h5>
                        <h5 class="text-secondary">{{ $movie->original_title }}</h5>
                        <hr>
                        <div class="text-success">Rating: {{ $movie->vote }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
