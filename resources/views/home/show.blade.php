<x-settings>
    <x-layout>     
           <x-nav></x-nav>
            <main>
                <div class="content_wrapper col-span-12">
                    <div class="boards border-2 border-green-500 h-60 w-10/12 mx-auto">
                        <div class="boards-header h-8 bg-green-400">
                            <p class="font-bold px-2">Boards</p>
                        </div>
                        <div class="boards-list px-14 py-4 flex justify-between">
                          <x-board-group></x-board-group>
                          <x-board-group></x-board-group>
                          <x-board-group></x-board-group>
                          <x-board-group></x-board-group>
                        </div>
                    </div>
                    <div class="threads border-2 border-green-500 w-10/12 mx-auto mt-8">
                        <div class="threads_header h-8 bg-green-400">
                            <p class="font-bold px-2">Popular Threads</p>
                        </div>
                        <div class="threads_list px-14 py-4 flex justify-between gap-x-4">
                           <x-thread-block></x-thread-block>
                           <x-thread-block></x-thread-block>
                           <x-thread-block></x-thread-block>
                           <x-thread-block></x-thread-block>
                        </div>
                        <div class="threads_list px-14 py-4 flex justify-between gap-x-4">
                            <x-thread-block></x-thread-block>
                            <x-thread-block></x-thread-block>
                            <x-thread-block></x-thread-block>
                            <x-thread-block></x-thread-block>
                        </div>
                    </div>
                    <div class="boards border-2 border-green-500 w-10/12 mx-auto mt-8 mb-8">
                        <div class="boards-header h-8 bg-green-400">
                            <p class="font-bold px-2">Stats</p>
                        </div>
                        <div class="boards-list p-6 flex justify-around">
                           <p class="font-semibold">Total Posts: <span class="font-normal">1,000</span></p>
                           <p class="font-semibold">Current Users: <span class="font-normal">1,000</span></p>
                        </div>
                    </div>
                </div>
            </main>
        </x-layout>
</x-settings>