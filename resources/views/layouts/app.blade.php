<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project 01') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            {{-- <menu-component></menu-component> --}}
            <div class="container">
                <div class="header-bar">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Acceuil') }} --}}Pressings 
                    </a>
                    <div>
                        <img id="menu-burger"src="/icons/menu.svg" alt="">
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="menu-all">
                        <ul class="navbar-nav">
                            
                            {{-- @section('navigation-bar')
                            
                            <nav class="navBar"> 
                                {{-- brand --}}
                                {{-- <div><span>Pressing</span></div> --}}
                                    @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                        <li class="nav-item">
                                                <a href="{{ url('/home') }}">Home</a>
                                            </li>
                                            {{-- @else
                                                <a href="{{ route('login') }}">Connexion</a>
                                                
                                                @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Inscription</a>
                                                @endif --}}
                                            @endauth
                                            
                                            {{-- </div>--}}
                                                @endif 
                                                {{-- </nav> --}} 
                                                {{-- @show --}}
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                    </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <li class="nav-item">
                                           <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                               {{ __('Deconnection') }}
                                           </a>
                                       </li>
    
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                                @endguest
                            </ul>

                        </div>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script src="/js/script.js"></script>
</body>
</html>
