@extends('layouts.main')

@section('title')

@section('main-content')

<div class="container my-4">

    <form class="row g-3" action="{{ route('comics.update', $comic->slug) }}" method="POST">

        @csrf
        @method('PUT')


        <div class="col-12">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description" value="{{ $comic->description }}">
        </div>
        <div class="col-12">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" id="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="col-12">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="price" value="{{ $comic->price }}">
        </div>
        <div class="col-12">
            <label for="series" class="form-label">Series</label>
            <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series }}">
        </div>
        <div class="col-12">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="col-12">
            <label for="type" class="form-label">Type</label>
            <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type }}">
        </div>

        <input type="submit" value="Submit" >
    </form>

</div>



@endsection
