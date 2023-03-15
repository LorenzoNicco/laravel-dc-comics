@extends('layouts.app')

@section('content')
    <h1 class="text-center">Lista fumetti</h1>

    <div class="container my-3">
        <nav class="row">
            <a href="{{ route('home') }}" class="col btn btn-primary">Torna alla Home</a>
        </nav>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            @foreach ($comics as $singleComic)
                <div class="card col-4 mb-3" style="width: 18rem;">
                    <img src="{{ $singleComic->thumb }}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">{{ $singleComic->title }}</h5>

                        <p class="card-text">Serie: {{ $singleComic->series }}</p>

                        <p>Prezzo: {{ $singleComic->price }} euro</p>
                    </div>
                    
                    <a href="{{ route('comics.show', $singleComic->id) }}" class="btn btn-primary mb-2">Più Dettagli</a>

                    <a href="{{ route('comics.edit', $singleComic->id) }}" class="btn btn-warning">Modifica</a>
              </div>
            @endforeach
        </div>
    </div>
@endsection