<header
    class="absolute top-0 left-0 flex flex-wrap items-center justify-between w-full py-4 text-white transition lg:px-20 px-7 font-poppins">
    <div class="title font-bold text-2xl text-[#00c4ff]"><a href="/">SIPKTA</a></div>

    <nav
        class="lg:block lg:static  md:static absolute top-full right-7 md:block sm:hidden hidden md:w-[50%] lg:w-[40%] w-[60%] lg:bg-transparent md:bg-transparent bg-[#00c4ff] lg:rounded-none md:rounded-none rounded-lg ">
        <ul class="justify-between block px-3 py-5 lg:flex md:flex w-100 lg:py-0 lg:px-0 md:py-0 md:px-0">
            <li class="hover:bg-[#00c4ff] py-2 px-4 transition rounded-full group">
                <a href="/"
                    class="text-white transition lg:text-[#00c4ff] md:text-[#00c4ff] lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300"><i
                        class="fa-solid fa-house lg:hidden md:hidden inline mr-1"></i> Beranda</a>
            </li>
            <li class="hover:bg-[#00c4ff] py-2 px-4 transition-all rounded-full group relative ">
                <a href="/about"
                    class="text-white lg:text-[#00c4ff] md:text-[#00c4ff] transition lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300"><i
                        class="fa-solid fa-newspaper lg:hidden md:hidden inline mr-1"></i> About</a>
            </li>


            @auth
            <hr class="text-white h-2">
            <li
                class="hover:bg-[#00c4ff] bg-[#00c4ff] lg:py-2 lg:px-7 md:py-2 md:px-7 px-4 py-2 transition rounded-full group relative">
                <p class="text-white transition hover:text-slate-300 cursor-pointer"><i
                        class="fa-solid fa-user lg:hidden md:hidden inline mr-1"> </i>{{ auth()->user()->nama }} <i
                        class="fa-solid fa-chevron-down hidden lg:inline md:inline"></i></p>


                <ul
                    class=" lg:block md:block hidden absolute w-full top-[110%] invisible group-hover:visible opacity-0 group-hover:opacity-100 right-0 transition duration-300  bg-white z-50 text-[#00c4ff] p-3 shadow-slate-300 shadow-lg rounded-lg">

                    @can('admin')
                    <li class="w-full">
                        <a href="/dashboard"
                            class="text-[#00c4ff] px-3 py-2 hover:text-white hover:bg-[#00c4ff] w-full block rounded transition"><i
                                class="fa-solid fa-gauge"></i> Dashboard</a>
                    </li>
                    @else
                    <li class="w-full">
                        <a href="/dashboard/myprofile/user"
                            class="text-[#00c4ff] px-3 py-2 hover:text-white hover:bg-[#00c4ff] w-full block rounded transition"><i
                                class="fa-solid fa-user mr-2"> </i>My Profile</a>
                    </li>
                    @endcan
                    <hr>
                    <li class="w-full">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit"
                                class=" text-[#00c4ff] px-3 py-2 hover:text-white hover:bg-[#00c4ff] w-full block rounded transition text-start"><i
                                    class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                    </li>
                </ul>

            </li>
            @can('admin')
            <li
                class="lg:hidden md:hidden block hover:bg-[#00c4ff] py-2 px-4 transition-all rounded-full group relative ">
                <a href="/dashboard"
                    class="text-white lg:text-[#00c4ff] md:text-[#00c4ff] transition lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300"><i
                        class="fa-solid fa-gauge mr-1"></i> Dashboard</a>
            </li>
            @else
            <li
                class="lg:hidden md:hidden block hover:bg-[#00c4ff] py-2 px-4 transition-all rounded-full group relative ">
                <a href="/dashboard/myprofile/user"
                    class="text-white lg:text-[#00c4ff] md:text-[#00c4ff] transition lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300"><i
                        class="fa-solid fa-user mr-1"> </i> My Profile</a>
            </li>
            @endcan
            <li
                class="lg:hidden md:hidden block hover:bg-[#00c4ff] py-2 px-4 transition-all rounded-full group relative ">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="text-white lg:text-[#00c4ff] md:text-[#00c4ff] transition lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300">
                        <i class="fa-solid fa-right-from-bracket mr-1"></i> Logout</button>
                </form>
            </li>

            @else
            <li class="hover:bg-[#00c4ff] py-2 px-4 transition rounded-full group">
                <a href="/register"
                    class="text-white lg:text-[#00c4ff] md:text-[#00c4ff] transition lg:group-hover:text-white md:group-hover:text-white group-hover:text-slate-300"><i
                        class="fa-solid fa-user-pen lg:hidden md:hidden inline mr-1"></i> Register</a>
            </li>
            <li class="bg-[#00c4ff] lg:py-2 lg:px-7 md:py-2 md:px-7 px-4 py-2 transition rounded-full group">
                <a href="/login" class="text-white transition hover:text-slate-300 "><i
                        class="fa-solid fa-right-to-bracket lg:hidden md:hidden inline mr-1"></i> Login</a>
            </li>
            @endauth

        </ul>
    </nav>

    <div class="block hamburger-menu lg:hidden md:hidden sm:block">
        <span class="transition duration-300 origin-top-left hamburger-line"></span>
        <span class="transition duration-300 hamburger-line"></span>
        <span class="transition duration-300 origin-bottom-left hamburger-line"></span>
    </div>
</header>