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
                            Lupa Password
                        </h2>
                    </div>

                    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                        <p class="text-[#00c4ff] text-justify mb-3">Tolong masukan email anda, nanti akan kami kirimkan link
                            untuk mereset password anda</p>
                        @if (session('status'))
                            <p class="text-green-500 mb-3">{{ session('status') }}</p>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-[#00c4ff]">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#00c4ff] sm:text-sm sm:leading-6  @error('email') ring-1 ring-red-400 @enderror">
                                    @error('email')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#00c4ff] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#00b1e6] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-3">Kirim email</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

