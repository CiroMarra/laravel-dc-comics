@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Inserisci un nuovo Comics</h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
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
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>  
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di rilascio</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                </div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="6" name="description">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-success">Crea</button>
            </form>
        </div>
    </section>
@endsection