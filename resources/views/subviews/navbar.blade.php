<nav
    class="bg-[#F8F8F8] pri-font flex items-center justify-between max-w-[1515px] w-11/12 mx-auto px-4 py-4 rounded-b-3xl shadow-lg border-b-7 border-base-300">
    <div class="flex justify-between flex-row-reverse gap-2 items-center w-full lg:w-auto">
        {{-- Mobile Dropdown --}}
        <div>
            <div class="dropdown lg:hidden">
                <button tabindex="0" class="btn btn-ghost openbutton">
                    {{-- এখানে তোমার Hamburger আইকন SVG বসাও --}}
                    ☰
                </button>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content border mr-10 absolute bg-lime-50 border-teal-50 rounded-box z-10 mt-2 w-52 p-2 shadow -right-5 hidden">

                    <li>
                        <a href="/"
                            class="text-black font-medium   {{ request()->is('/') ? 'font-bold text-pink-500' : '' }}">
                            Home
                        </a>
                        @auth
                            <div class="absolute right-0">
                                <img class="rounded-full w-9 h-9" src="{{ Auth::user()->photo }}" alt="">
                            </div>
                        @endauth
                    </li>
                    <li>
                        <a href="{{ route('browseposts') }}" class="text-black font-medium ">
                            Browse Posts
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-black font-medium ">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black font-medium ">
                            FAQ
                        </a>
                    </li>

                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center px-4 py-2.5 text-gray-300 bg-gray-900 hover:scale-y-105 rounded-lg">
                                <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                    @else
                        <div class="grid gap-2">
                            <li>
                                <a href="{{ route('login') }}"
                                    class="cursor-pointer transition duration-300 bg-blue-400 inline-flex py-2 p-2 rounded-xl text-white font-medium items-center gap-2 ">
                                    <i class="fas fa-sign-in-alt"></i> Sign In
                                </a>
                            </li>
                        </div>
                    @endauth



                </ul>
            </div>
        </div>

        {{-- Logo --}}
        <a href="/" class="flex gap-2 items-center">
            <div class="text-2xl sm:text-3xl font-bold">
                <span class="text">Cozy</span>
                <span class="text-rose-500">N</span>
                <span class="text">est</span>
            </div>
        </a>
    </div>

    {{-- Desktop Navigation --}}
    <div class="hidden lg:flex gap-4 lg:gap-6 text-lg">
        <a href="/"
            class="{{ request()->is('/') ? 'font-bold pb-1  text-pink-500 lg:text-lg' : 'hover:text-primary transition duration-300  lg:text-lg' }}">
            Home
        </a>

        <a href="{{ route('browseposts') }}"
            class="{{ request()->is('browseposts') ? 'font-bold pb-1  text-pink-500 lg:text-lg' : 'hover:text-primary transition duration-300  lg:text-lg' }} ">
            Browse Posts
        </a>

        <a href="#"
            class="{{ request()->is('about') ? 'font-bold pb-1  text-pink-500 lg:text-lg' : 'hover:text-primary transition duration-300  lg:text-lg' }}">
            About
        </a>
        <a href="#"
            class="{{ request()->is('faq') ? 'font-bold pb-1  text-pink-500 lg:text-lg' : 'hover:text-primary transition duration-300  lg:text-lg' }}">
            FAQ
        </a>
    </div>

    {{-- Authentication --}}
    <div class="text-lg space-x-4 flex items-center">
        <div class="mr-5 hidden lg:block">
            {{-- Theme Toggle --}}
            @auth
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-4 py-2.5 text-gray-300 bg-gray-900 hover:scale-y-105 rounded-lg">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="hidden lg:inline-flex font-bold rounded-xl p-2 bg-blue-400 text-white  btn btn-sm md:btn-md btn-outline hover:bg-accent transition-all duration-300 hover:shadow hover:text-black hover:-translate-y-1">
                    Sign In
                </a>
            @endauth
        </div>

    </div>
</nav>
