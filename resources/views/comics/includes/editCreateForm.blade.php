<form class="row g-3" action="{{ route($routeName, $comic->slug) }}" method="POST">

        @csrf
        @method($httpMethod)

    <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" value="{{ old('title', $comic->title) }}">
    </div>
    @error('title')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <input name="description" type="text" class="form-control" id="description" value="{{ old('description', $comic->description)}}">
    </div>

    @error('description')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="col-12">
        <label for="thumb" class="form-label">Thumb</label>
        <input name="thumb" type="text" class="form-control" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
    </div>

    @error('thumb')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="col-12">
        <label for="price" class="form-label">Price</label>
        <input name="price" type="text" class="form-control" id="price" value="{{ old('price', $comic->price) }}">
    </div>

    @error('price')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="col-12">
        <label for="series" class="form-label">Series</label>
        <input name="series" type="text" class="form-control" id="series" value="{{ old('series', $comic->series) }}">
    </div>

    @error('series')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="col-12">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
    </div>

    @error('sale_date')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="col-12">
        <label for="type" class="form-label">Type</label>
        <input name="type" type="text" class="form-control" id="type" value="{{  old('type', $comic->type) }}">
    </div>

    @error('type')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

        <input type="submit" value="Submit" >
</form>

