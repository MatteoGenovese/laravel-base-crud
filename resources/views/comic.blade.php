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

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>
</html>
