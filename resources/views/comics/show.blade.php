@extends('layouts.app')

@section('content')
<div class="card my-3">
    <img src="{{ $comic->thumb}}" style="width:18rem">
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
@endsection