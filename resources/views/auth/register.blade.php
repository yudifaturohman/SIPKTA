@extends('layouts.main')


@section('content')

<section class="pb-6 text-white pt-11 section-statistic font-poppins">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">

        <div class="login lg:w-[600px] w-full  mx-auto  lg:p-4 md:p-4 rounded-xl flex flex-wrap">
            <div class="w-full mx-auto lg:w-full">
                <div class="flex flex-col justify-center min-h-full px-0 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="w-auto h-[120px] mx-auto" src="/img/logo.png" alt="Your Company">
                        <h2 class="mt-5 text-2xl font-bold leading-9 tracking-tight text-center text-[#00c4ff]">
                            Daftar Sebelum Melapor
                        </h2>
                    </div>

                    <div class="mt-10 lg:w-full md:w-full  sm:w-full w-full">
                        <form action="register" method="POST">
                            @csrf
                            <div class="flex flex-wrap lg:mb-3 md:mb-3 mb-0">
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0">
                                    <label for="nama"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">Nama</label>
                                    <div class="mt-2">
                                        <input id="nama" name="nama" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('nama')
                                                ring-1 ring-red-400
                                            @enderror" value="{{ old('nama') }}">

                                        @error('nama')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0 ">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">Email</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('email')
                                                ring-1 ring-red-400
                                            @enderror" value="{{ old('email') }}">
                                        @error('email')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap lg:mb-3 md:mb-3 mb-0">
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0">
                                    <label for="nik"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">NIK</label>
                                    <div class="mt-2">
                                        <input id="nik" name="nik" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('nik')
                                                ring-1 ring-red-400
                                            @enderror" value="{{ old('nik') }}">
                                        @error('nik')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0 ">
                                    <label for="nohp" class="block text-sm font-medium leading-6 text-[#00c4ff]">No
                                        Handphone</label>
                                    <div class="mt-2">
                                        <input id="nohp" name="nohp" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('nohp')
                                                ring-1 ring-red-400
                                            @enderror" value="{{ old('nohp') }}">
                                        @error('nohp')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap lg:mb-3 md:mb-3 mb-0">
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0">
                                    <label for="nik"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">Password</label>
                                    <div class="mt-2">
                                        <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('password')
                                                ring-1 ring-red-400
                                            @enderror">
                                        @error('password')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="lg:w-1/2 md:w-1/2 w-full lg:mb-0 md:mb-0 mb-3 lg:px-2 md:px-2 px-0 ">
                                    <label for="email" class="block text-sm font-medium leading-6 text-[#00c4ff]">Ketik
                                        ulang password</label>
                                    <div class="mt-2">
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('password_confirmation')
                                                ring-1 ring-red-400
                                            @enderror">
                                        @error('password_confirmation')
                                        <small class="text-red-400">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="lg:px-2 md:px-2 px-0 mb-4">
                                <div class="flex items-center justify-between">
                                    <label for="alamat"
                                        class="block text-sm font-medium leading-6 text-[#00c4ff]">Alamat</label>
                                </div>
                                <div class="mt-2">
                                    <textarea name="alamat" id="alamat" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6 @error('alamat')
                                                ring-1 ring-red-400
                                            @enderror">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="lg:px-2 md:px-2 px-0 lg:mt-0 md:mt-0">
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#00c4ff] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#00b1e6] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
                            </div>
                        </form>

                        <p class="mt-10 text-sm text-center text-gray-500">
                            Sudah punya akun?
                            <a href="/login" class="font-semibold leading-6 text-[#00c4ff] ">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection



{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}