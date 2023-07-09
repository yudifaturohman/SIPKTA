@extends('layouts.main')


@section('content')
<section class="pb-6 text-white pt-11 section-statistic font-poppins">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">

        <div class="login lg:w-[800px] w-full  mx-auto  lg:p-4 p-0 rounded-xl flex flex-wrap">
            <div class="w-full mx-auto lg:w-1/2">
                <div class="flex flex-col justify-center min-h-full px-0 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="w-auto h-[120px] mx-auto"
                            src="/img/logo.png" alt="Your Company">
                        <h2 class="mt-5 text-2xl font-bold leading-9 tracking-tight text-center text-[#00c4ff]">
                            Masuk Dengan Akun Anda
                        </h2>
                    </div>

                    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">

                        @if (session('message'))
                        <div
                            class="kotak w-full py-4 px-5 bg-emerald-200 border-2 border-emerald-400 rounded-md text-sm text-emerald-500">
                            {{ session('message') }}</div>
                        @endif
                        @if (session('alert'))
                        <div
                            class="kotak w-full py-4 px-5 bg-red-200 border-2 border-red-400 rounded-md text-sm text-red-500">
                            {{ session('alert') }}</div>
                        @endif
                        <form class="space-y-6" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-[#00c4ff]">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('email')
                                                ring-1 ring-red-400
                                            @enderror" value="{{ old('email') }}">
                                    @error('email')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">Password</label>
                                    <div class="text-sm">
                                        <a href="{{ route('password.request') }}"
                                            class="font-semibold text-[#00c4ff] hover:text-[#00c4ff]">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('password')
                                                ring-1 ring-red-400
                                            @enderror">
                                    @error('password')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#00c4ff] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#00b1e6] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
                            </div>
                        </form>

                        <p class="mt-10 text-sm text-center text-gray-500">
                            Belum punya akun?
                            <a href="/register" class="font-semibold leading-6 text-[#00c4ff] ">Registrasi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection





{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}