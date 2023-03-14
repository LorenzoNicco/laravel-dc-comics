@extends('layouts.app')

@section('content')
    <h1 class="text-center">Comics</h1>

    <div class="container">
        <div class="row g-2">
            <a href="{{ route('comics.index') }}" class="btn btn-primary col">Visualizza tutti i fumetti</a>
        
            <a href="{{ route('comics.create') }}" class="btn btn-primary col">Aggiungi un fumetto</a>
        </div>
    </div>
@endsection