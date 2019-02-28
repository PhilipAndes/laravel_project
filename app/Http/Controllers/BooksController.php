<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    function bookInfo($id) {
        // $id = Book::findOrFail($id);
        // dd($id);
        // $book_id = $id;
        $book = Book::find($id);


        // dd($book);
        // $clickedBook = Book::find($book_id);
        // return view('bookInfo', compact('clickedBook'));
        // $clickedBook = \App\Book::find($book_id);

        return view('bookInfo', compact('book'));
    }

}
