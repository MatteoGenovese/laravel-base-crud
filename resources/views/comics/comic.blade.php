@extends('layouts.main')

@section('title')

@section('main-content')

<div class="container my-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="comic-container">
                <div class="comic-img">
                    <img class="h-100" src="{{ $comic->thumb }}" alt=" {{ $comic->title }} card image">
                </div>
                <h5> {{ $comic->title }}</h5>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>

    <div class="back-button">
        <a href="{{ route('comics.index') }}"> Go Back </a>
    </div>
</div>

@endsection
