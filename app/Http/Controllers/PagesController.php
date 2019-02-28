<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function shop() {

        $books = \App\Book::all();

        $fantasy = \App\Book::all()->where('genre', 'Fantasy');

        $thriller = \App\Book::all()->where('genre', 'Thriller');

        $romance = \App\Book::all()->where('genre', 'Romance');

        $horror = \App\Book::all()->where('genre', 'Horror');

        $biography = \App\Book::all()->where('genre', 'Biography');

        return view('shop', compact('books', 'fantasy', 'thriller', 'romance', 'horror', 'biography'));
    }

    public function bookInfo() {

        $clickedBook = \App\Book::all();

        //$clickedBook = \App\Book::all()->where('book_id', []);
        // $clickedBook = \App\Book::find($book_id, []);

        return view('bookInfo', compact('clickedBook'));

        // function bookInfo($id) {
        //     $bookInfo = Book::find($book_id);
        //     return view('bookInfo', compact('bookInfo'));
        // }

    }

    // public function about(){
    //     return view('about');
    // }

    public function contact(){
        return view('contact');
    }
}
