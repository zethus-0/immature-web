@extends('layouts.app')

@section('content')
    <div class="h-screen overflow-hidden flex items-center justify-center">
        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white bg-opacity-50 p-3 border-t-4 border-indigo-600">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto" src="{{ asset('images/' . $user->image_path) }}" alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $user->username }}</h1>
                        <h3 class="text-gray-800 font-lg text-semibold leading-6">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-900 hover:text-blue-600 leading-6">{{ $user->email }} </p>
                        <ul
                            class="bg-gray-100 bg-opacity-70 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Account Verified</span>
                                <span class="ml-auto"><span @isset($user->account_verified_at)
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">Verified
                                        @endisset
                                        @empty($user->account_verified_at)
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
                    <!-- End of profile card -->
                    <div class="my-4"></div>

                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- Profile Section -->
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
                            <div class="grid md:grid-cols-1 text-sm">
                                <div class="grid grid-cols-3">
                                    <div class="px-4 py-2 font-semibold">Username</div>
                                    <div class="px-4 py-2">{{ $user->username }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="px-4 py-2 font-semibold">Name</div>
                                    <div class="px-4 py-2">{{ $user->name }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="px-4 py-2 font-semibold">Password</div>
                                    <div class="px-4 py-2">*********</div>
                                    <a href="/password/reset"
                                        class="p-2 lg:px-2 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Logout</a>
                                </div>
                                @admin
                                <div class="grid grid-cols-3">
                                    <div class="px-4 py-2 font-semibold">Administrator Rights</div>
                                    <div class="px-4 py-2">{{ $user->is_admin }}</div>
                                </div>
                                @endadmin
                                <div class="grid grid-cols-3">
                                    <div class="px-4 py-2 font-semibold">Email</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800"
                                            href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="block w-full p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300">
                            Edit Account Information</button>
                    </div>
                    <!-- End of about section -->

                    <div class="my-4"></div>

                    <!-- Experience and education -->
                    <div class="bg-white bg-opacity-50 p-3 shadow-sm rounded-sm">

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
                                        <div class="text-teal-600 pb-80">Coming Soon</div>
                                        {{-- <div class="text-gray-500 text-xs">Coming Soon</div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </div>

    </div>
@endsection
