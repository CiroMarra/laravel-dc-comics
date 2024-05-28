@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Modifica Comic</h1>
            <form action="{{ route('comics.update', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
                </div>
                  @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb) }}">
                </div>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option @selected(old('type') === '') value="">Scegli un'opzione</option>
                        <option @selected(old('type') === 'Comics') value="Comics">Comics</option>
                        <option @selected(old('type') === 'Manga') value="Manga">Manga</option>
                        <option @selected(old('type') === 'Novel') value="Novel">Novel</option>
                      </select>
                </div>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price) }}">
                </div>
                @error('price')
                     <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di rilascio</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date) }}">
                </div>
                @error('sale_date')
                     <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series) }}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="6" name="description">{{ old('description', $comic->description) }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection