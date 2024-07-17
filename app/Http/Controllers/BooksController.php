<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BooksController extends Controller
{
    public function index(Request $request): View
    {
        $books = Book::all();

        return view('books', [
            'books' => $books
        ]);
    }

    public function show($id) :View
    {
        $book = Book::where('id', $id)->first();

        return view('book', [
            'book' => $book
        ]);
    }

    public function pdf($id)
    {
        $book = Book::where('id', $id)->first();

        $pdfPath = storage_path('private' . DIRECTORY_SEPARATOR . $book->pdf);

        $fileContent = file_get_contents($pdfPath);

        return response($fileContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="harry_insygnia.pdf"',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
            'Pragma' => 'no-cache',
            'Expires' => '0'
        ]);
    }
}
