@extends('layouts.main')

@section('title','sign-up')

@section('main-content')

<div class="container">




    <form class="row g-3" action="{{ route('newUser.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputFirstName" class="form-label">First Name</label>
            <input name="inputFirstName" type="text" class="form-control" id="inputFirstName">
        </div>
        <div class="col-md-6">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input name="inputLastName" type="text" class="form-control" id="inputLastName">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="inputEmail" type="email" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="inputPassword" type="password" class="form-control" id="inputPassword">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input name="inputCity" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label">Zip</label>
            <input name="inputZip" type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>


</div>

@endsection
