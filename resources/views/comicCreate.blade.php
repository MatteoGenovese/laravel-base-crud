@extends('layouts.main')

@section('title')

@section('main-content')

<div class="container my-4">

    <form class="row g-3" action="{{ route('comics.store') }}" method="POST">


        {{-- {{ route('comics.store') }} --}}

        {{-- TODO Passa i valori dell'elemento modificato nel form --}}


        {{-- "title" => "Action Comics #1000: The Deluxe Edition",
"description" => "The celebra",
"thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
"Price" => "9.99",
"series" => "Action Comics",
"sale_date" => "2018-10-02",
"type" => "comic book" --}}


        @csrf
        <div class="col-12">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description">
        </div>
        <div class="col-12">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" id="thumb">
        </div>
        <div class="col-12">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>
        <div class="col-12">
            <label for="series" class="form-label">Series</label>
            <input name="series" type="text" class="form-control" id="series">
        </div>
        <div class="col-12">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input name="sale_date" type="date" class="form-control" id="sale_date">
        </div>
        <div class="col-12">
            <label for="type" class="form-label">Type</label>
            <input name="type" type="text" class="form-control" id="type">
        </div>

        <input type="submit" value="Submit" >
    </form>

</div>



@endsection
