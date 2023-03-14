@extends('layouts.app')

@section('content')
    <h1 class="text-center">Comics</h1>

    <a href="{{ route('comics.index') }}" class="btn btn-primary">Visualizza tutti i fumetti</a>
@endsection