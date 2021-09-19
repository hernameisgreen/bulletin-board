<x-settings>
    <x-layout>     
           <x-nav></x-nav>
           <main class="w-10/12 mx-auto mb-20">
           <div class="w-6/12 mx-auto">
            <h1 class="text-center font-bold text-2xl mb-6">Create New Post</h1>
               <form action="/boards/{{$board->slug}}/posts/" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <x-label for="title" :value="__('Title')" class="mb-2"/>
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                    </div>
                    <div class="mb-6">
                        <x-label for="content" :value="__('Content')" class="mb-2"/>
                        <x-textarea id="content" name="content" class="w-full">{{old('content')}}</x-textarea>
                    </div>
                    <div class="mb-6">
                        <x-label for="img" :value="__('Img')" class="mb-2"/>
                        <input type="file" name="img" id="img">
                    </div>
                    <div>
                        <x-submit-button></x-submit-button>
                    </div>
                </form>
           </div>
           </main>
    </x-layout>
</x-settings>