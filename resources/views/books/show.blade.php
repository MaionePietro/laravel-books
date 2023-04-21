@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
        <h1>{{ $book->id }}</h1>
        <h1>{{ $book->titolo }}</h1>
        <p>{{ $book->autore_id }}</p>
        <p>{{ $book->genere_id }}</p>
        <p>{{ $book->numero_copie }}</p>
    </div>
@endsection
