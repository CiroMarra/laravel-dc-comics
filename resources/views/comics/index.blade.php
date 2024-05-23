@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h1>Lista Fumetti</h1>

            <div class="row row-cols-4">
                @foreach ($comics as $comic)
             
                    <div class="col">
                        <div class="card my-3">
                            <img src="{{ $comic->thumb}}">
                            <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <div>Prezzo: {{ $comic->price }}</div>
                            <div>Serie: {{ $comic->series }}</div>
                            <div>Data di rilascio: {{ $comic->sale_date}}</div>
                            <div> Tipo: {{ $comic->type}}</div>
                            
                            <p class="card-text">Descrizione {{ $comic->description }}</p>
                            <a href="{{ route('home') }}" class="btn btn-primary">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </section>
@endsection