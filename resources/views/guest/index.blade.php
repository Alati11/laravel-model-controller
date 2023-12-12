@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <h2 class="mb-3">{{ $movie->title }}</h2>
                <p>
                    <h3 class="mb-3">{{ $movie->vote }}</h3>
                </p>
            </div>
        @endforeach
    </div>
</div>
    
@endsection