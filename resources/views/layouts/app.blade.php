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
<body class="bg-background  antialiased leading-none font-sans ">
    <div id="app">
        <header>
            <div class="bg-primary py-4 px-2 ">
                <div class="">
                    <nav class="flex items-center justify-between flex-wrap  ">
                        <div class="flex items-center flex-no-shrink text-white mr-6 ">
                            <a href="/"><img src="{{ url('/images') }}/logo-2.png" alt=""
                                    class="filter-invert h-50 object-cover h-10 w-40 mr-2  "></a>
                        </div>
                        <div class="block lg:hidden">
                            <button
                                class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                                <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                        <div id="main-nav" class="w-full flex-grow lg:flex items-center lg:w-auto hidden  ">
                            <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">
                                <a href="/"
                                    class="block lg:inline-block text-lg font-bold  text-main  sm:hover:border-accent  hover:text-accent mx-2  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    HOME
                                </a>
                                <a href="/blog"
                                    class="block lg:inline-block text-lg font-bold  text-main  sm:hover:border-accent  hover:text-accent mx-2  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    BLOG
                                </a>
                                @guest
                                    <a href="{{ route('login') }}"
                                        class="block lg:inline-block text-lg font-bold  text-main  sm:hover:border-accent  hover:text-accent mx-2  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                        LOGIN
                                    </a>
                                    @if(Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="block lg:inline-block text-lg font-bold  text-main  sm:hover:border-accent  hover:text-accent mx-2  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                            REGISTER
                                        </a>
                                    @endif
                                @else
                                    <a href="/{{ Auth::user()->username }}"
                                        class="uppercase block lg:inline-block text-md font-bold  text-primary  sm:hover:border-accent  hover:text-main mx-2  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <a href="{{ route('logout') }}"
                                        class="uppercase block lg:inline-block text-md font-bold  text-primary  sm:hover:border-accent  hover:text-main mx-2 p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                @endguest
                            </div>
                        </div>
                        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
                    </nav>

                </div>
            </div>
        </div>
        </header>



<!-- SCREEN SIZE SCRIPT -->

        <script>
            // Navbar Toggle
            document.addEventListener('DOMContentLoaded', function () {

                // Get all "navbar-burger" elements
                var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach(function ($el) {
                        $el.addEventListener('click', function () {

                            // Get the "main-nav" element
                            var $target = document.getElementById('main-nav');

                            // Toggle the class on "main-nav"
                            $target.classList.toggle('hidden');

                        });
                    });
                }

            });

        </script>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
</body>

</html>
