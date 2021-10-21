@extends('layouts.app')
@section('content')
<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('{{ url('/images') }}/main.webp');">    </section>
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
      <img src="{{ url('/images') }}/main.webp" width="700" alt="tz" />
   </div>
   <div class="m-auto sm:m-auto text-left w-4/5 block">
      <h2 class="text-4xl font-extrabold text-gray-600">
         What is Immature?
      </h2>
      <p class="py-8 text-gray-500 text-l">
         Immature is a new and upcoming mulitplayer turn-based game
      </p>
      <p class="font-extrabold text-gray-600 text-l pb-9">
         Come take a look at some of our demo product!
      </p>
      <a href="/product"
         class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
      demo
      </a>
   </div>
</div>
@endsection
