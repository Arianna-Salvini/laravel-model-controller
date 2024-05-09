@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center text-light">Movies</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4 text-center bg-primary p-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card p-3">
                        <h5> {{ $movie->title }}</h5>
                        <hr>
                        <h5 class="text-dark">Original title:</h5>
                        <h6 class="text-secondary">{{ $movie->original_title }}</h6>
                        <hr>
                        <div class="text-warning">Rating: {{ $movie->vote }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
