@extends('layouts.app')

@section('content')
@if (session()->has('message'))
<div class="w-4/5 m-auto">
<div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div>
        <span class="font-medium">Success!</span> {{ session()->get('message') }}
    </div>
</div>
</div>
@endif
</div>
<div class="overflow-x-hidden">
    <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-primary md:text-2xl">Development Blog</h1>
                    @admin
                    <a href="blog/create" class="px-3 py-2 mx-1 font-medium text-black bg-white bg-opacity-50 rounded-md">
                        Create new post
                    </a>
                    @endadmin
                    {{-- <div>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>First</option>
                            <option>Last Week</option>
                        </select>
                    </div> --}}
                </div>
                @foreach ($posts as $post)
                <div class="mt-6">
                 <div class="max-w-2xl mx-auto overflow-hidden bg-white bg-opacity-50 rounded-lg shadow-md dark:bg-gray-800">
        <img class="object-cover w-full h-64" src="{{ asset('images/' . $post->image_path) }}" alt="Development Blog Image">

        <div class="p-6">
            <div>
                <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Category//Not Implemented</span>
                <a href="/blog/{{ $post->slug }}" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">{{ $post->title }}</a>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $post->description }}</p>
            </div>

            <div class="mt-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <img class="object-cover h-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Face-smile.svg/2048px-Face-smile.svg.png" alt="Avatar">
                        <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">{{ $post->user->name }}</a>
                    </div>
                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ date('jS M Y', strtotime($post->created_at))}}</span>

                    @admin
                    <div class="flex items-center px-5">
                    <button onclick="window.location.href='/blog/{{ $post->slug }}/edit'" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                        Edit
                    </button>
                    <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')
                    <button onclick="return confirm('Are you sure?')" type="submit" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                        Delete
                    </button>
                </form>
            </div>
                    @endadmin
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
                <div class="mt-8">
                    <div class="flex-auto">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            <div class="hidden w-4/12 -mx-8 lg:block">
                <div class="px-8">
                    <h1 class="mb-4 text-xl font-bold text-primary">Developers</h1>
                    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                        <ul class="-mx-4">
                            @foreach ($developers as $developer)
                            <li class="flex items-center"><img
                                    src="images/{{ $developer->image_path }}"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-accent hover:underline">{{ $developer->name }}</a><span
                                        class="text-sm font-light text-white"></span></p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    @endsection
