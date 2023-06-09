@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card text-center m-2" style="width: 18rem;">
                        <a href="{{ route('books.show', $book->id) }}" style="text-decoration: none; color:black;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->titolo }}</h5>
                                <p class="card-text">{{ $book->numero_copie }}</p>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">EDIT</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="DELETE">
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
