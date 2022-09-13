<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
        <table class="table table-sm table-dark table-hover table-striped w-100">
            <thead>

                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Type</th>

            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                    </tr>
                @empty

                @endforelse

            </tbody>
        </table>
    </div>
    </div>

</body>
</html>
