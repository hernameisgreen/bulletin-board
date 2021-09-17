<header>
    <div class="header_wrapper h-12 w-10/12 mx-auto bg-indigo-200 border-2 border-indigo-400 mb-10 grid grid-cols-8 px-4 py-2">
       
            <div class="logo text-xl font-bold text-center col-start-3 col-span-3"><a href="/">Banter </a></div>
       
        {{-- <div class="col-start-7 col-span-2 flex justify-around">
            <a href="/login" class="">Log In</a>
            <a href="/register">Sign Up</a>
        </div> --}}
        @if (Route::has('login'))
        <div class="hidden absolute top-0 right-56 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                <a href="{{ url('/logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
</header>