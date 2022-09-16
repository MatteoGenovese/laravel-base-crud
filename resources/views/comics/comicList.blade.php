@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<div class="container my-4">
    <a href="{{ route('comics.create') }}" class="btn btn-dark mb-2">
        create a new Comic
    </a>

    <div class="row">
    <table class="table table-sm table-dark table-hover table-striped w-100">
        <thead>

            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Series</th>
            <th>Type</th>
            <th></th>

        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td scope="row">{{ $comic->id }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->slug) }}"> {{ $comic->title }} </a>
                    </td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.edit', $comic->slug) }}" class="btn btn-light">
                        edit
                        </a>

                        <form action="{{ route('comics.destroy', $comic->slug) }}" method="POST" >

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" value="delete">
                                destroy

                            </button>
                        </form>

                    </td>
                </tr>
            @empty

            @endforelse

        </tbody>
    </table>
</div>
</div>

@endsection
