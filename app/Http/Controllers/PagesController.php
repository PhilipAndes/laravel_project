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

        //return $books;

        return view('shop', compact('books'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
