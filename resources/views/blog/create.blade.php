@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create a post
        </h1>
    </div>
    </div>
@if ($errors->any())
<div class="w-4/5 m-auto">

        <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div>
                @foreach ($errors->all() as $error)
                <span class="font-medium">Error!</span> {{ $error }} </br>
                @endforeach
            </div>
        </div>
    </div>


@endif
    <div class="w-4/5 m-auto">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="/blog"
                        enctype="multipart/form-data">
                        @csrf
                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Title
                                    <span class="text-red-500">*</span>
                                </label></br>
                                <input type="text"
                                class="border-2 border-gray-300 p-2 w-full"
                                name="title"
                                id="title"
                                value="" required>
                            </div>

                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Description<span class="text-red-500">*</span></label></br>
                                <input type="text"
                                class="border-2 border-gray-300 p-2 w-full"
                                name="description"
                                id="description"
                                placeholder="" required>
                            </div>

                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                                <textarea name="content" class="border-2 border-gray-500">
                                </textarea required>
                                <div class="bg-grey-ligher pt-10 pb-5">
                                    <label class="text-xl text-gray-600">Header Image<span class="text-red-500">*</span></label></br>
                                    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                                        <span class="mt-2 text-base leading-normal">
                                            select a file</span>
                                            <input type="file"
                                            name="image"
                                            class="hidden">
                                    </label>
                            </div>

                            <div class="flex p-1">
                                <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace( 'content' );
        </script>
        </div>

    </div>
    @endsection
