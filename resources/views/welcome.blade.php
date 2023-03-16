@extends('layouts.app')

@section('content')
    <h1 class="text-center">Comics</h1>

    <div class="container">
        <div class="row g-2 justify-content-around">
            <a href="{{ route('comics.index') }}" class="btn btn-primary col-4">Visualizza tutti i fumetti</a>
        
            <a href="{{ route('comics.create') }}" class="btn btn-primary col-4">Aggiungi un fumetto</a>
        </div>
    </div>
@endsection