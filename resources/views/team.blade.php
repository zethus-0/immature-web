@extends('layouts.app')
@section('content')
    <section class="h-full leading-none">


        <div class="container w-100 mx-auto ">
            <div class="grid grid-cols-1 m-auto">
                <div class="flex text-primary pt-10">
                    <div class="m-auto sm:m-auto w-4/5 block text-center">
                        <h1 class="sm:primary text-5xl uppercase font-bold text-shadow-md pb-14">
                            Meet our Team
                        </h1>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden flex items-center">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                        @foreach ($developers as $developer)
                            <div
                                class="w-full bg-white bg-opacity-25 rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row">
                                <div class="w-full md:w-2/5 h-80">
                                    <img class="object-center object-cover w-full h-full"
                                        src="images/{{ $developer->image_path }}" alt="photo">
                                </div>
                                <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                                    <p class="text-xl text-gray-800 font-bold">{{ $developer->name }}</p>
                                    <p class="text-base text-gray-800 font-semibold">{{ $developer->role }}</p>
                                    <p class="text-base leading-relaxed text-gray-700 font-normal">
                                        {{ $developer->description }} </p>
                                    <div class="flex justify-start space-x-2">
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
