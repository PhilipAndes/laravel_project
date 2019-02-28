@extends('master')

@section('title', 'Book Info')

@section('content')

    <div class="header2 debug">
        <h1>Book Info</h1>
    </div>
    <img src="{{asset($book->img)}}" class="image" style="width:100%"/>
    {{ $book->book_name}}
    {{ $book->genre}}
    {{ $book->year}}
    {{ $book->writer}}
    {{ $book->price}}
    {{ $book->description}}


{{-- @foreach ($clickedBook as $cBook)
<a target="_blank" href="{{ url('bookInfo' . $cBook->book_id) }}"> {{($cBook->book_name) }}
</a> @endforeach   --}}

@endsection