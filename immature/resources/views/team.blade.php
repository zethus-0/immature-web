
@extends('layouts.app')
@section('content')
<section class="bg-gray-100 leading-none">


<div class="container mx-auto ">
    <div class="grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
           <div class="m-auto sm:m-auto w-4/5 block text-center">
              <h1 class="sm:text-gray-700 text-5xl uppercase font-bold text-shadow-md pb-14">
                  Meet our Team
            </h1>
        </div>
     </div>
  </div>

  <div class="mx-auto flex flex-wrap -mx-6 overflow-hidden sm:-mx-4 md:-mx-4">
            {{-- sect s --}}
            @foreach ($developers as $developer)
            <div class="my-6 px-6 w-1/3 overflow-hidden sm:my-4 sm:px-4 sm:w-1/2 md:my-4 md:px-4 md:w-1/2 lg:w-1/3 xl:w-1/3">
                <div class="m-7 rounded profiles bg-opacity-40 backdrop-filter backdrop-blur-sm hover:bg-opacity-50">
                    <div class="p-6 profile">
                        <h3 class="font-semibold text-2xl name">{{ $developer->name }} </h3>
                        <h5 class="font-semibold text-lg">{{ $developer->role }} </h5>
                        <p class="text-justify"> {{ $developer->description }} </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- sect e --}}
        </div>
    </div>
</div>

@endsection
