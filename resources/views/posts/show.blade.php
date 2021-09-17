<x-settings>
    <x-layout>     
           <x-nav></x-nav>
            <main class="w-10/12 mx-auto mb-20">
                   <x-post-card :post="$post" :comments="$comments" :commentCount="$commentCount"></x-post-card>
            </main>
        </x-layout>
</x-settings>