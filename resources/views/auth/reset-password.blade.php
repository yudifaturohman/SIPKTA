@extends('layouts.main')
@section('content')
<section class="pb-6 text-white pt-11 section-statistic font-poppins">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">

        <div class="login lg:w-[800px] w-full  mx-auto  lg:p-4 p-0 rounded-xl flex flex-wrap">
            <div class="w-full mx-auto lg:w-1/2">
                <div class="flex flex-col justify-center min-h-full px-0 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="w-auto h-[120px] mx-auto" src="/img/logo.png" alt="Your Company">
                        <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-[#00c4ff]">
                            Reset Password
                        </h2>
                    </div>

                    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                        
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-[#00c4ff]">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6  @error('email') ring-1 ring-red-400 @enderror"
                                        value="{{ old('email', $request->email) }}">
                                    @error('email')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium leading-6 text-[#00c4ff]">Password</label>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6  @error('password') ring-1 ring-red-400 @enderror">
                                    @error('password')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium leading-6 text-[#00c4ff]">Ketik ulang password</label>
                                <div class="mt-2">
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6  @error('password_confirmation') ring-1 ring-red-400 @enderror">
                                    @error('password_confirmation')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#00c4ff] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#00b1e6] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-3">reset
                                    password</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email', $request->email)" required autofocus autocomplete="username" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}