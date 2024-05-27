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
                            <div class="card-body my-1"  style="height: 17rem">
                            <h5>{{ $comic->title }}</h5>
                            <div>Prezzo: {{ $comic->price }} euro.</div>
                            <div>Serie: {{ $comic->series }}</div>
                            <div>Data di rilascio: {{ $comic->sale_date}}</div>
                            <div class="my-2">
                                <a href="{{ route('comics.show', ['comic' =>$comic->id]) }}" class="btn btn-primary">Scopri di più</a>
                                <a href="{{ route('comics.edit', ['comic' =>$comic->id]) }}" class="btn btn-primary">Edita</a>
                            </div>
                            <div class="my-1">    
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger js-delete-btn" data-comic-title="{{ $comic->title }}" type="submit">Elimina</button>
                                </form>
                            </div>

                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Conferma eliminazione</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" id="modal-confirm-deletion" class="btn btn-danger">Elimina</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </section>
@endsection