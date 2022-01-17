<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- META INFO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Team 26 presents Immature an online turn-based multiplayer card game" />
    <meta name="keywords" content="" />
    <meta name="author" content="Team 26/Dylan" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<!-- NAVIGATION MENU -->

<body class="leading-normal tracking-normal text-indigo-400 bg-cover bg-fixed m-6" style="background-image: url({{ url('/images') }}/bg.png);">
    <div id="app">
        <header>
            <div class="py-4 px-2 ">
                <div class="">
                    <div class="header-2">
                        <nav class="py-2 md:py-4">
                            <div class="container px-4 mx-auto md:flex md:items-center">
                                <div class="flex justify-between items-center">
                                    <a href="/"><img src="{{ url('/images') }}/logo-2.png" alt=""
                                            class="filter-invert h-50 object-cover h-10 w-40 mr-2"></a>
                                    <button
                                    class="md:hidden"
                                        id="navbar-toggle">
                                        <div class="p-2 space-y-2 bg-gray-600 rounded shadow">
                                            <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
                                            <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
                                            <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
                                          </div>
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>

                                <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0"
                                    id="navbar-collapse">
                                    <a href="/" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-600">Home</a>
                                    <a href="/blog"
                                        class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Blog</a>
                                    <a href="/team"
                                        class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">About
                                        Us</a>
                                    @guest
                                        <a href="{{ route('login') }}"
                                            class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Login</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Register</a>
                                        @endif
                                    @else
                                        <a href="/{{ Auth::user()->username }}"
                                            class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-100 hover:text-indigo-700 transition-colors duration-300">{{ Auth::user()->name }}</a>
                                        <a href="{{ route('logout') }}"
                                            class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            {{ csrf_field() }}
                                        </form>
                                    @endguest
                                </div>
                            </div>
                        </nav>


                    </div>
                </div>
            </div>
        </header>


        <script>
            let toggleBtn = document.querySelector("#navbar-toggle");
            let collapse = document.querySelector("#navbar-collapse");

            toggleBtn.onclick = () => {
                collapse.classList.toggle("hidden");
                collapse.classList.toggle("flex");
            };
        </script>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
</body>

</html>
