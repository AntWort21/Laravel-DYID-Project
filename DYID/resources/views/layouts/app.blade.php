<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{-- {{ config('app.name', 'Laravel') }} --}}
        DYID
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/headerfooter.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-orange shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('storage/DYIDtrans.png') }}" alt="" class="logo-size" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item login">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item register">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </div>
        </nav>
        <div class="header-lower">
            <div class="nav-bar">
                <div class="home">
                    <a href="/mainpage">
                        Home
                    </a>
                </div>
                <div class="my-cart">
                    <a href="/cart">
                    My Cart
                </div>
                <div class="history-transaction">
                    History Transaction
                </div>
                <div class="manage-product">
                    <a href="viewproduct">
                        Manage Product
                    </a>
                </div>
                <div class="manage-category">
                    {{-- <a href="managecategory"></a> --}}
                    Manage Category
                </div>
            </div>
        </div>


        <main class="py-4">
            @yield('content')
        </main>

        <div>
            <div class="footer">
                <div class="footer-logo">
                    <div class="logo">
                        <div class="facebook">
                            <img src="{{ asset('storage/facebook.png') }}" alt="" class="fbLogo" style="width: 40px; height: 40px">
                        </div>
                        <div class="instagram">
                            <img src="{{ asset('storage/ig-logo.png') }}" alt="" class="igLogo" style="width: 40px; height: 40px">
                        </div>
                        <div class="youtube">
                            <img src="{{ asset('storage/yt-logo.png') }}" alt="" class="ytLogo" style="width: 40px; height: 40px"   >
                        </div>
                    </div>
                </div>
    
                <div class="footer-note">
                    <div class="copyright">
                        &copy 2021 Copyright DY.ID
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
