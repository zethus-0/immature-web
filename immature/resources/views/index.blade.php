@extends('layouts.app')
@section('content')
<section class="relative bg-black overflow-hidden">
    <div class="relative w-2/3 ml-auto">
        <!-- HERO IMAGES -->
      <div class="absolute top-0 left-0 -ml-64 rounded-full h-20 md:h-160 w-80 md:w-160">
        <img class="object-contain transform scale-200" src="https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
      </div>
      <div class="absolute top-1/2 left-0 mt-40 lg:mt-20 rounded-full h-20 md:h-160 w-80 md:w-160">
        <img class="object-contain transform scale-200" src="https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
      </div>
      <div class="absolute top-0 left-0 -mt-40 ml-40 transform -translate-x-1/2 rotate-45 clip-path" style="width: 1000px; height: 1000px;">
        <img class="h-full transform -rotate-45 object-cover" src="https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
      </div>
    </div>
    <div class="relative flex mb-20 px-16 py-8 justify-between bg-transparent"></div>
    <div class="relative container mx-auto px-4 pb-24 md:pb-64">
      <div class="relative max-w-6xl mx-auto">
        <span class="block mb-4 md:absolute top-0 right-0 text-gray-500 lg:text-lg font-semibold uppercase tracking-widest">Team 26 Presents</span>
        <h2 class="mb-6 md:mb-0 text-2xl sm:text-4xl md:text-6xl text-white uppercase font-heading">
          <span>Immature</span>
          <span class="block">Interactive Online Game</span>
        </h2>
        <a class="inline-flex items-center mt-20 py-4 px-6 rounded-full bg-yellow-400  hover:bg-yellow-500 transform duration-200" href="https://game.immature.live">
          <svg class="mr-3" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.01 3.16553H0V5.24886H12.01V8.37386L16 4.20719L12.01 0.0405273V3.16553Z" fill="black"></path>
          </svg>
          <span class="text-sm uppercase font-heading">Try our demo</span>
        </a>
      </div>
    </div>
    <div class="relative">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-px mb-px md:mb-0">
          <a class="flex justify-center items-center h-32 bg-black bg-opacity-40 backdrop-filter backdrop-blur-sm hover:bg-opacity-50" href="/blog">
            <div class="flex items-center text-sm">
              <span class="mr-2 text-white font-medium hover:underline font-heading">Visit our blog</span>
              <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.51 3.26163H0.5V5.35394H12.51V8.4924L16.5 4.30778L12.51 0.123169V3.26163Z" fill="#FFEC3E"></path>
              </svg>
            </div>
          </a>
        </div>
        <div class="w-full md:w-1/2 px-px">
          <a class="flex justify-center items-center h-32 bg-black bg-opacity-40 backdrop-filter backdrop-blur-sm hover:bg-opacity-50" href="/errors/503">
            <div class="flex items-center text-sm">
              <span class="mr-2 text-white font-medium hover:underline font-heading">Meet our team</span>
              <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.51 3.26163H0.5V5.35394H12.51V8.4924L16.5 4.30778L12.51 0.123169V3.26163Z" fill="#FFEC3E"></path>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

    </div>
  </section>
<div class="grid grid-cols-1 m-auto">
   <div class="flex text-gray-100 pt-10">
      <div class="m-auto sm:m-auto w-4/5 block text-center">
         <h1 class="sm:text-gray-700 text-5xl uppercase font-bold text-shadow-md pb-14">
            @auth
            Welcome {{auth()->user()->name}}!
            @endauth
            @guest
            Welcome!
            @endguest
         </h1>
      </div>
   </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pb-8 border-b border-gray-200">
   <div>
      <img src="{{ url('/images') }}/hero2.png" width="700" alt="tz" />
   </div>
   <div class="m-auto sm:m-auto text-left w-4/5 block">
      <h2 class="text-4xl font-extrabold text-gray-600">
         What is Immature?
      </h2>
      <p class="py-8 text-gray-500 text-l">I
        Immature is an online, turn-based multiplayer social card game that focus on the battle of shrewdness and humour which allows players to have up to 3 to 8 players in a game
      </p>
      <p class="font-extrabold text-gray-600 text-l pb-9">
         Come take a look at our demo product!
      </p>
      <a href="https://game.immature.live"
         class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
      demo
      </a>
   </div>
</div>
@endsection
