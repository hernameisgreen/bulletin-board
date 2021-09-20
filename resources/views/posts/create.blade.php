<x-settings>
    <x-layout>
        <x-nav></x-nav>
        <main class="w-10/12 mx-auto mb-20">
            <div class="w-6/12 mx-auto">
                <h1 class="text-center font-bold text-2xl mb-6">Create New Post</h1>
                <x-posting-guidelines></x-posting-guidelines>
                <form action="/boards/{{ $board->slug }}/posts/" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <div class="block">
                            <x-label for="title" :value="__('Title')" class="mb-2" /><span
                                class="text-red-500">*</span>
                        </div>
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                            required autofocus />
                        <p class="text-red-500 text-semibold">{{ $errors->first('title') }}</p>
                    </div>

                    <div class="mb-6">
                        <div class="block">
                            <x-label for="content" :value="__('Content')" class="mb-2" /><span
                                class="text-red-500">*</span>
                        </div>
                        <x-textarea id="content" name="content" class="w-full" required>{{ old('content') }}
                        </x-textarea>
                        <p class="text-red-500 text-semibold">{{ $errors->first('content') }}</p>
                    </div>

                    <div class="mb-6">
                        <div class="block">
                            <x-label for="img" :value="__('Image')" class="mb-2" />
                        </div>
                        <input type="file" name="img" id="img">
                        <p class="text-red-500 text-semibold">{{ $errors->first('img') }}</p>
                    </div>
                    <div>
                        <x-submit-button></x-submit-button>
                    </div>
                </form>
            </div>
        </main>
    </x-layout>
</x-settings>
