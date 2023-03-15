@extends('layouts.app')

@section('content')
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <div class="container">
        <div class="row">
            <form class="col" action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" placeholder="Inserisci il titolo" value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="d-block w-100" name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3 form-check">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control w-100" id="thumb" name="thumb" placeholder="Inserisci l'url di un'immagine" value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3 form-check">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control w-100" id="series" name="series" placeholder="Di che serie fa parte?" value="{{ $comic->series }}">
                </div>

                <div class="mb-3 form-check">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="date" class="form-control w-100" id="sale_date" name="sale_date" value="2023-03-14" min="2018-01-01" max="2025-12-31" value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3 form-check">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control w-100" id="type" name="type" placeholder="Che tipo di articolo è?" value="{{ $comic->type }}">
                </div>

                <div class="mb-3 form-check">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control w-100" id="price" name="price" placeholder="Inserisci un prezzo con il punto" value="{{ $comic->price }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection