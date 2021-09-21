<header>
    <div class="header_wrapper h-20 w-10/12 mx-auto  border-2 bg-indigo-100 mb-10 grid grid-cols-8 px-4 py-2">
       
            <div class="logo col-start-3 col-span-4 mx-auto"><a href="/"><img src="{{asset('img/banter-logo.png')}}" alt="Banter Company Logo" class="h-12"></a></div>
       
        @if (Route::has('login'))
        <div class="hidden absolute top-0 right-56 px-6 py-4 sm:block">
            @auth
                <div class="flex gap-x-4 items-center">
                    @if(Auth::user()->isAdmin)

                    <a href="{{ url('admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                    @else

                    <a href="{{ url('user') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                    @endauth
                    <form action="/logout" method="post">
                    @csrf
                    <input type="submit" value="logout" class="text-sm text-white bg-indigo-600 p-1 rounded shadow hover:text-yellow-500 hover:bg-indigo-700 cursor-pointer">
                    </form>
                </div>

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