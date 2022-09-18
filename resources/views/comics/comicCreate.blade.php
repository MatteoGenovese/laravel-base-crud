@extends('layouts.main')

@section('title')

@section('main-content')

<div class="container my-4">


    @include('comics.includes.editCreateForm',[
            'routeName' => 'comics.store',
            'httpMethod' => 'POST'
            ])


</div>



@endsection
