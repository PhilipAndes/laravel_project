<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
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

            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ url('home') }}">Login</a>
            </li>

        </ul>
    </div>


@yield('content')

<script src="/js/main.js"></script>

</body>
</html>