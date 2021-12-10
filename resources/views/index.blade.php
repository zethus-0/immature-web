@extends('layouts.app')
@section('content')
<section class="relative bg-black overflow-hidden">
    <div>
      <div class="absolute left-0">
        <img class="w-auto h-full transform object-cover" src="{{ url('/images') }}/splashres.webp" alt="" />
      </div>
      <div class="relative flex mb-20 px-16 py-8 justify-between bg-transparent"></div>
      <div class="relative container mx-auto px-4 pb-24 md:pb-64">
        <div class="relative max-w-6xl mx-auto">
          <span class="text-shadow block mb-4 md:absolute top-0 right-0 text-gray-100 lg:text-lg font-semibold uppercase tracking-widest">Team 26 Presents</span>
          <h2 class="text-shadow mb-6 md:mb-0 text-2xl sm:text-4xl md:text-6xl text-white uppercase font-heading">
            <span>Immature</span>
          <span class="block">Interactive Online Game</span>
        </h2>
        <a class="box-shadow inline-flex items-center mt-20 py-4 px-6 rounded-full bg-accent  hover:bg-main transform duration-200" href="https://game.immature.live">
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
          <a class="flex justify-center items-center h-32 bg-black bg-opacity-40 backdrop-filter backdrop-blur-sm hover:bg-opacity-50" href="/team">
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
         <h1 class="sm:text-primary text-5xl uppercase font-bold text-shadow-md pb-14">
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
      <h2 class="text-4xl font-extrabold text-primary">
         What is Immature?
      </h2>
      <p class="py-8 text-primary text-l">
        Immature is an online, turn-based, multiplayer, social card game that focuses on the battle of shrewdness and humour. It allows 3-8 players to enjoy many laughs as they surprise each other with amusing cards.
      </p>
      <p class="font-extrabold text-primary text-l pb-9">
         Come take a look at our demo product!
      </p>
      <a href="https://game.immature.live"
         class="box-shadow uppercase bg-accent hover:bg-main text-primary text-s font-extrabold py-3 px-8 rounded-3xl">
      Demo
      </a>
   </div>
</div>
@endsection
