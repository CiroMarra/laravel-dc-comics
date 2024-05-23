@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Inserisci un nuovo Comics</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option selected>Scegli un'opzione</option>
                        <option value="manga">Manga</option>
                        <option value="comics">Comics</option>
                        <option value="novel">Novel</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Anno di rilascio</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="6" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection