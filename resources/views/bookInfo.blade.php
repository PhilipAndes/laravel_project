@extends('master')

@section('title', 'Book Info')

@section('content')

    <div class="header2 debug">
        <h1>Book Info</h1>
    </div>

    <div class="bookInfo debug">
        <img src="{{asset($book->img)}}" class="image1" style="width:100%"/>
        <div class="flexContainer3 debug">
            <p>Title: {{ $book->book_name}}</p>
            <p>Genre: {{ $book->genre}}</p>
            <p>Year: {{ $book->year}}</p>
            <p>Writer: {{ $book->writer}}</p>
            <p>Price: {{ $book->price}}</p>
            <p>Description: {{ $book->description}}</p>
            <a href="/shop">
            <button class="backButton">Back</button>
            </a>
        </div>
    </div>


{{-- @foreach ($clickedBook as $cBook)
<a target="_blank" href="{{ url('bookInfo' . $cBook->book_id) }}"> {{($cBook->book_name) }}
</a> @endforeach   --}}

@endsection