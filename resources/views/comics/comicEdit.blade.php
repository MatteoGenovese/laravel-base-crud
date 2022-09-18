@extends('layouts.main')

@section('title')

@section('main-content')

<div class="container my-4">

    @include('comics.includes.editCreateForm',[
            'routeName' => 'comics.update',
            'httpMethod' => 'PUT'
            ])

</div>



@endsection
