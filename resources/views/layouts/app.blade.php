<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('addon-scripts')
    {{--    <script src="{{ asset('build/assets/app-c75e0372.js') }}" defer></script>--}}

    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{ asset('build/assets/app-faeac595.css') }}">--}}
    @stack('styles')
</head>
<body>
<div id="app" class="vh-100">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm py-3">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/Logo-WF.png') }}" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('buildings.*') ? 'active text-decoration-underline' : '' }}"
                           href="{{ route('buildings.index') }}">Building</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('rooms.*') ? 'active text-decoration-underline' : '' }}"
                           href="{{ route('rooms.index') }}">Room</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn me-md-4 px-0 px-md-4">
                            <i class="bi bi-telephone-fill me-2 d-none d-md-inline-block"></i>
                            <span>Contact Us</span>
                        </button>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        @if(!Route::is(['login', 'register']))
                            @if (Route::has('login'))
                                <li class="nav-item me-2 mb-2 mb-md-0">
                                    <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark"
                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    <main style="padding-top: 4.5rem;">
        @yield('content')
    </main>
    @include('partials.footer')
</div>
@stack('scripts')
</body>
</html>
