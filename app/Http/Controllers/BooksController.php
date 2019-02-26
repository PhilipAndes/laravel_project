<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    public function showBook(){

        $books = Book::all();

        return $books;

        return view('books.shop');
    }
}
