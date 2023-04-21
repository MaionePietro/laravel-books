@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New book</h1>
    </div>

    <div class="container">
        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="titolo" value="{{ old('titolo') }}">
            </div>

            <div class="mb-3">
                <label for="autore_id" class="form-label">id autore</label>
                <input type="text" class="form-control" id="autore_id" name="autore_id"
                    value="{{ old('autore_id')}}">
            </div>

            <div class="mb-3">
                <label for="genere_id" class="form-label">genere id</label>
                <input type="text" class="form-control" id="genere_id" name="genere_id"
                    value="{{ old('genere_id') }}">
            </div>

            <div class="mb-3">
                <label for="numero_copie" class="form-label">numero copie</label>
                <input type="text" class="form-control" id="numero_copie" name="numero_copie"
                    value="{{ old('numero_copie') }}">
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>

        </form>

    </div>
@endsection
