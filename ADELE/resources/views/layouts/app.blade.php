<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{{ ('favicon.ico') }}" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADELE') }}</title>

    <!-- Scripts -->
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div id="app">
        <nav class="nav-extended black">
            <div class="nav-wrapper">
              <a href="{{ url('/') }}" style="color: black !important;" class="brand-logo center"><img src="images/logoalb.png" width="150 px" margin-top="30 px"</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"></i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">


                @if(Auth::user() && Auth::user()->role == 1)
                <li><a href="{{ route('orders')}}">Comenzi</a></li>
                @endif

                @if (Auth::user() && Auth::user()->role == 0)
                <li><a href="{{url ('checkout')}}">Checkout</a></li>
                <li><a href="{{ route('carts')}}">Coș</a></li>
                @endif

                @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link" style="color: white !important;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white !important;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown-trigger btn">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white !important;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
            <div class="nav-content">
              <ul class="tabs tabs-transparent ">

              </ul>
            </div>
          </nav>




        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
