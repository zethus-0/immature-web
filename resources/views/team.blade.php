
@extends('layouts.app')
@section('content')
<section class="h-full bg-background leading-none">


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

  <!-- <div class="gap-2 flex flex-wrap overflow-hidden">
            {{-- sect s --}}
            @foreach ($developers as $developer)
            <div class="border-secondary border-4 my-6 px-2 w-1/3 overflow-hidden sm:my-4 sm:px-2 sm:w-1/2 md:my-4 md:px-2 md:w-1/2 lg:w-1/3 xl:w-1/3">
                <div class="m-4 rounded profiles bg-opacity-40 backdrop-filter backdrop-blur-sm hover:bg-opacity-50">
                    <div class="p-6 profile">
                        <div>
                            <img class="mx-auto h-40 w-40 object-cover" src="{{$developer->image_path}}"> </img>
                        </div>
                        <h3 class=" text-center font-semibold text-2xl name">{{ $developer->name }} </h3>
                        <h5 class="font-semibold text-lg">{{ $developer->role }} </h5>
                        <p class="text-justify"> {{ $developer->description }} </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- sect e --}}
        </div>
    </div> -->

    <div class=" flex flex-wrap overflow-hidden sm:-mx-px md:-mx-2 lg:-mx-1 xl:-mx-1">

            {{-- sect s --}}
            @foreach ($developers as $developer)
            <div class=" w-full overflow-hidden sm:my-px sm:px-px sm:w-full md:my-2 md:px-2 md:w-1/3 lg:my-1 lg:w-1/3 xl:my-1 xl:w-1/3 xl:px-1">
                <div class=" text-primary border-2 border-primary bg-darker rounded profiles h-full">
                    <div class="p-6 profile">
                        <div>
                            <img class="mx-auto h-40 w-40 object-cover" src="{{ $developer->image_path }}">
                        </div>
                        <h3 class=" text-center font-semibold text-2xl name">{{ $developer->name }} </h3>
                        <h5 class="font-semibold text-lg">{{ $developer->role }} </h5>
                        <p class="text-justify"> {{ $developer->description }} </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- sect e --}}
    </div>
</div>
</section>
@endsection
