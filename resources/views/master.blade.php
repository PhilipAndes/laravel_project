<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title', 'Book A Holic')</title>
</head>
<body>
    
    <div class="nav debug">
        <ul class="flexContainer1 debug">

            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li class="{{ Request::is('shop') ? 'active' : '' }}">
                <a href="{{ url('shop') }}">Shop</a>
            </li>

            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                <a href="{{ url('contact') }}">Contact</a>
            </li>

            {{-- <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ url('home') }}">Login</a>
            </li> --}}
 
            <!-- Authentication Links -->
            @guest
                <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="dropdown">
                    <a id="navbarDropdown" class="dropbtn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>


@yield('content')

<script src="/js/main.js"></script>

</body>
</html>