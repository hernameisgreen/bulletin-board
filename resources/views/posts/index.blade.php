<x-settings>
    <x-layout>     
           <x-nav></x-nav>
            <main class="w-10/12 mx-auto mb-20">
                <div class="mb-32">
                    <h1 class="text-center text-4xl font-bold underline">{{$board_name}}</h1>

                    <a href="/posts" class="text-center block mt-20"><button class="bg-green-300 py-4 px-4 rounded-xl shadow hover:bg-green-400">Start a new thread!</button></a>
                </div>
                   <x-post-cards :posts="$posts"></x-post-cards>
                   
            </main>
        </x-layout>
</x-settings>