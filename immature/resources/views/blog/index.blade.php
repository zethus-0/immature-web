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
<div class="overflow-x-hidden bg-gray-100">
    <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
                    @admin
                    <a href="blog/create" class="px-3 py-2 mx-1 font-medium text-black bg-white rounded-md">
                        Create new post
                    </a>
                    @endadmin
                    {{-- <div>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Latest</option>
                            <option>Last Week</option>
                        </select>
                    </div> --}}
                </div>
                @foreach ($posts as $post)
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ date('jS M Y', strtotime($post->created_at))}}</span><a href="/blog/{{ $post->slug }}"
                                class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">TBC CAT</a>
                        </div>
                        <div class="mt-2"><a href="/blog/{{ $post->slug }}" class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
                            <p class="mt-2 text-gray-600"> {{ $post->description }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="/blog/{{ $post->slug }}"
                                class="text-blue-500 hover:underline">Read more </a>
                            <div>

                                <a href="/" class="flex items-center"><img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Face-smile.svg/2048px-Face-smile.svg.png"
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-gray-700 hover:underline"> {{ $post->user->name }}</h1>
                                </a>
                                @admin
                                <span class="float-right">
                                    <a href="/blog/{{ $post->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">Edit</a>
                                </span>
                                <span class="float-right">

                        <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?')" class="text-gray-700 pr-3" type="submit">Delete</button>
                        </form>
                                </span>
                                @endadmin
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
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Developers</h1>
                    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                        <ul class="-mx-4">
                            @foreach ($developers as $developer)
                            <li class="flex items-center"><img
                                    src="{{ $developer->image_path }}"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">{{ $developer->name }}</a><span
                                        class="text-sm font-light text-gray-700"></span></p>
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
