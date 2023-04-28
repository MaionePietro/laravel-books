<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class GuestPageController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'titolo'=>'required|max:255|min:4',  //parametri voluti per verifica
            'numero_copie'=>'required|integer|min:10',
            'autore_id'=>'required|integer|min:1'
        ]);
        $data = $request->all();
        $new_book = new Book();
        $new_book->titolo = $data['titolo'];
        $new_book->autore_id = $data['autore_id'];
        $new_book->genere_id = 0;// $data['genere_id'];
        $new_book->numero_copie = $data['numero_copie'];
        $new_book->save();
        return to_route('books.show', $new_book);
    }
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'titolo'=>'required|string|max:255|min:4',  //parametri voluti per verifica
            'numero_copie'=>'required|integer|min:10',
            'autore_id'=>'required|integer|min:1'
        ]);
        $data = $request->all();
        $book->titolo = $data['titolo'];
        $book->autore_id = $data['autore_id'];
        $book->genere_id = 0 ;//$data['genere_id']
        $book->numero_copie = $data['numero_copie'];
        $book->save();
        return to_route('books.show', $book);
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return to_route('books.index');
    }
}
