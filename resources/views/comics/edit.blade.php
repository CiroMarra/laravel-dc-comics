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
                  <input type="text" class="form-control" id="title" name="title" value="{{$comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option>Scegli un'opzione</option>
                        <option {{ $comic->type === 'manga' ? 'selected' : '' }} value="manga">Manga</option>
                        <option {{ $comic->type === 'comics' ? 'selected' : '' }} value="comics">Comics</option>
                        <option {{ $comic->type === 'novel' ? 'selected' : '' }} value="novel">Novel</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di rilascio</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="6" name="description">{{$comic->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection