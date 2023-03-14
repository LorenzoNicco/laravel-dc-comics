@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">{{ $comic->title }}</h1>

            <div class="card">
                <div class="card-body">
                    <img src="{{ $comic->thumb }}" alt="">

                    <p>{{ $comic->description }}</p>

                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla Lista</a>
                </div>
            </div>
        </div>
    </div>

@endsection