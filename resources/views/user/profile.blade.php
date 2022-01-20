@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    @foreach ($errors->all() as $error)
                        <span class="font-medium">Error!</span> {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>

    @endif
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
    <div class="h-full overflow-y-visible flex items-center justify-center">

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <div class="w-full md:w-3/12 md:mx-2">
                    <div class="bg-white bg-opacity-50 p-3 border-t-4 border-indigo-600">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto" src="{{ asset('images/' . $user->image_path) }}" alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $user->username }}</h1>
                        <h3 class="text-gray-800 font-lg text-semibold leading-6">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-900 hover:text-blue-600 leading-6">{{ $user->email }} </p>
                        <ul
                            class="bg-gray-100 bg-opacity-70 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Account Verified</span>
                                <span class="ml-auto"><span @isset($user->email_verified_at)
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">Verified
                                        @endisset
                                        @empty($user->email_verified_at)
                                            class="bg-red-500 py-1 px-2 rounded text-white text-sm">Not Verified
                                        @endempty
                                    </span></span>

                            </li>
                            <li class="flex items-center py-3">
                                <span>Account Created</span>
                                <span class="ml-auto">{{ $user->created_at->format('j F Y') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="my-4"></div>
                <div class="w-full md:w-9/12 sm:mx-0 md:mx-2 h-64">
                    <div class="bg-white bg-opacity-50 p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Profile Information</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid grid-cols-1 text-sm">
                                @admin
                                <div class="grid grid-cols-3 pb-3">
                                    <div class="px-4 py-2 font-semibold">Administrator Rights</div>
                                    <div class="px-4 py-2">{{ $user->is_admin }}</div>
                                    <form method="POST" action="/user/profile/{{ $user->id }}"

                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input class="form-check-input appearance-none border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" name="isadmin" value="0">
                                        <label class="form-check-label inline-block text-gray-800 mr-4" for="flexCheckDefault">
                                            Disable
                                          </label>
                                          <input class="form-check-input appearance-none border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" name="isadmin" value="1">
                                        <label class="form-check-label inline-block text-gray-800 mr-4" for="flexCheckDefault">
                                            Enable
                                          </label>
                                        <button type="submit"
                                        class="p-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">
                                        Submit</button>

                                </div>
                                @endadmin
                                <div class="grid grid-cols-3 pb-3">
                                    <div class="px-4 py-2 font-semibold">Username</div>
                                    <div class="px-4 py-2">{{ $user->username }}</div>
                                </div>
                                <div class="grid grid-cols-3 pb-3">
                                    <div class="px-4 py-2 font-semibold">Name</div>
                                    <div class="px-4 py-2">{{ $user->name }}</div>
                                </div>
                                <div class="grid md:grid-cols-3 sm:grid-cols-2 pb-3">
                                    <div class="px-4 py-2 font-semibold">E-mail</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800"
                                            href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </div>
                                    @if (!$user->hasVerifiedEmail())
                                    <a href="/email/verify"
                                    class="p-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Verify
                                    E-mail</a>
                                    @else
                                    @endif
                                </div>
                                <form method="POST" action="/user/profile/{{ $user->id }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid md:grid-cols-3 sm:grid-cols-2 pb-3">
                                         <div class="px-4 py-2 font-semibold">Profile Image</div>
                                            <label class="p-2 sm:w-full md:w-10/12 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 @if (!$user->hasVerifiedEmail())
                                                cursor-not-allowed" disabled
                                                @else
                                                @endif ">
                                            <span class="text-base leading-normal">
                                                Select an Image</span>
                                                <input type="file"
                                                name="image"
                                                class="hidden @if (!$user->hasVerifiedEmail())
                                                cursor-not-allowed" disabled
                                                @else
                                                @endif ">
                                        </label>
                                        <button type="submit"
                                            class="p-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300
                                            @if (!$user->hasVerifiedEmail())
                                            cursor-not-allowed" disabled
                                            @else
                                            @endif ">
                                            Upload</button>
                                </div>
                                </form>
                                <div class="grid md:grid-cols-3 sm:grid-cols-2 pb-3">
                                    <div class="px-4 py-2 font-semibold">Password</div>
                                    <div class="px-4 py-2">*********</div>
                                    <a href="/password/reset"
                                        class="p-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">Change
                                        Password</a>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="my-4"></div>
                    <div class="flex bg-white bg-opacity-50 p-3 shadow-sm rounded-sm">
                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Game Account Info</span>
                                </div>
                                <ul class="list-inside space-y-2">
                                    <li>
                                        <div class="text-teal-600 pb-60">Coming Soon</div>
                                        {{-- <div class="text-gray-500 text-xs">Coming Soon</div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
