<x-settings>
    <x-layout>     
           <x-nav></x-nav>
            <main class="w-10/12 mx-auto mb-20">
                <div class="mb-32">
                    <h1 class="text-center text-4xl font-bold underline">{{$board->name}}</h1>
                    @auth
                    <a href="/boards/{{$board->slug}}/posts" class="text-center block mt-20"><button class="bg-green-300 py-4 px-4 rounded-xl shadow hover:bg-green-400">Start a new thread!</button></a>
                    @else
                    <p class="mt-20 text-center text-lg"><a href="/login" class="underline text-blue-500 font-semibold">Login</a> or <a href="/register" class="underline text-blue-500 font-semibold">Register</a> to create a new conversation!</p>
                    @endauth
                </div>
                   <x-post-cards :posts="$posts"></x-post-cards>
                   
            </main>
        </x-layout>
</x-settings>