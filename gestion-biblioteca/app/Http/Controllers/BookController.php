<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
{
    $query = Book::query();

    if ($request->filled('title')) {
        $query->where('title', 'like', '%' . $request->title . '%');
    }

    if ($request->filled('author')) {
        $query->where('author', 'like', '%' . $request->author . '%');
    }

    if ($request->filled('year')) {
        $query->where('year', $request->year);
    }

    $books = $query->get();

    return view('books.index', compact('books'));
}
public function create()
{
    return view('books.create');
}

public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
        ]);
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
        ]);
        return redirect()->route('books.index')->with('success', 'Libro agregado exitosamente.');

}
public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect()->route('books.index')->with('success', 'Libro eliminado correctamente.');
}



}