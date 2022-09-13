<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic->title }}</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">


</head>
<body>

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



</body>
</html>
