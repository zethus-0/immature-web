<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>

            <div class="py-4 px-2 lg:mx-4 xl:mx-12 ">
                <div class="">
                    <nav class="flex items-center justify-between flex-wrap  ">
                        <div class="flex items-center flex-no-shrink text-white mr-6 ">
                            <a href="/"><img src="{{ url('/images') }}/logo-2.svg" alt="" class="h-12 xl:h-20  mr-2  "></a>
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
                                    class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    HOME
                                </a>
                                <a href="/blog"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    BLOG
                                </a>
@guest
                                <a href="{{ route('login') }}"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    LOGIN
                                </a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    REGISTER
                                </a>
                                @endif
                                @else
                                <a href="/{{Auth::user()->username}}"
                                    class="uppercase block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    {{Auth::user()->name}}
                                </a>
                                <a href="{{ route('logout') }}"
                                    class="uppercase block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                                @endguest
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

    </header>





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
