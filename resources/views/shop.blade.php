@extends('master')

@section('title', 'Shop')

@section('content')

    <div class="header2 debug">
        <h1>Books</h1>
    </div>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae explicabo ab hic consectetur perspiciatis voluptatum ratione, sapiente iusto, corrupti repellat iure. Consequuntur soluta, nulla rem blanditiis consectetur architecto dolore sint!</p>
 
    <div class="flexContainer2 debug">
        @foreach($books as $book)
                <h3><img src="{{asset($book->img)}}" class="bookImage"/></h3>
                {{-- <h3>{{$book->book_name}}</h3>
                <h3>{{$book->genre}}</h3> --}}
        @endforeach
  </div>

@endsection