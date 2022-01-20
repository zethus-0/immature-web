@extends('layouts.app')

@section('content')
<main class="bg-white bg-opacity-50 sm:container sm:mx-auto sm:max-w-lg sm:mt-10 sm:rounded-md">
    <div class="flex">
        <div class="w-full sm:rounded-md">
            <section class="flex flex-col sm:border-1 sm:rounded-md shadow-sm">

                <header class="font-semibold text-main py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Login') }}
                </header>

                <form class="text-black w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class=" block text-main text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-main text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-main" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-main hover:text-main whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                        class=" w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-primary bg-indigo-500 hover:bg-indigo-600 transform duration-200 sm:py-4">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-main my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            <a class="text-indigo-300 hover:text-main no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection
