@extends('master')

@section('title', 'Shop')

@section('content')

    <div class="header2 debug">
        <h1>Books</h1>
    </div>

    <!-- Side navigation !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="filterBar debug">
        <div class="filterTab">    
            <button class="tablinks" onclick="openBook(event, 'allBooks')" id="defaultOpen">All Books</button>
            <button class="tablinks" onclick="openBook(event, 'Fantasy')">Fantasy</button>
            <button class="tablinks" onclick="openBook(event, 'Thriller')">Thriller</button>
            <button class="tablinks" onclick="openBook(event, 'Romance')">Romance</button>
            <button class="tablinks" onclick="openBook(event, 'Horror')">Horror</button>
            <button class="tablinks" onclick="openBook(event, 'Biography')">Biography</button>
        </div>
    </div>
     
<!-- all books filter -->
    <div id="allBooks" class="tabcontent">
        <div class="flexContainer2 debug">
            @foreach($books as $book)
                <div class="container debug">
                    <img src="{{asset($book->img)}}" class="image" style="width:100%"/>
                        <div class="middle">
                            <a href="{{ url('bookInfo/' . $book->id) }}"> 
                                <div class="text">View Book</div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>

<!-- all fantasy books filter -->
    <div id="Fantasy" class="tabcontent">
        <div class="flexContainer2 debug">
            @foreach($fantasy as $fBook)
                <div class="container debug">
                    <img src="{{asset($fBook->img)}}" class="image" style="width:100%"/>
                        <div class="middle">
                            <a href="{{ url('bookInfo/' . $fBook->id) }}"> 
                                <div class="text">View Book</div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>

<!-- all fantasy books filter -->
        <div id="Thriller" class="tabcontent">
            <div class="flexContainer2 debug">
                @foreach($thriller as $tBook)
                    <div class="container debug">
                        <img src="{{asset($tBook->img)}}" class="image" style="width:100%"/>
                            <div class="middle">
                                <a href="{{ url('bookInfo/' . $tBook->id) }}"> 
                                    <div class="text">View Book</div>
                                </a>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
       
<!-- all Romance books filter -->
    <div id="Romance" class="tabcontent">
        <div class="flexContainer2 debug">
            @foreach($romance as $rBook)
                <div class="container debug">
                    <img src="{{asset($rBook->img)}}" class="image" style="width:100%"/>
                        <div class="middle">
                            <a href="{{ url('bookInfo/' . $rBook->id) }}"> 
                                <div class="text">View Book</div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    
<!-- all  Horror books filter -->
    <div id="Horror" class="tabcontent">
        <div class="flexContainer2 debug">
            @foreach($horror as $hBook)
                <div class="container debug">
                    <img src="{{asset($hBook->img)}}" class="image" style="width:100%"/>
                        <div class="middle">
                            <a href="{{ url('bookInfo/' . $hBook->id) }}"> 
                                <div class="text">View Book</div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    
<!-- all Biography books filter -->
    <div id="Biography" class="tabcontent">
        <div class="flexContainer2 debug">
            @foreach($biography as $bBook)
                <div class="container debug">
                    <img src="{{asset($bBook->img)}}" class="image" style="width:100%"/>
                        <div class="middle">
                            <a href="{{ url('bookInfo/' . $bBook->id) }}"> 
                                <div class="text">View Book</div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
  

@endsection

