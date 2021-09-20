<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>
<div class="max-w-2xl mx-auto mt-4">
    <form action="{{route('user.posts.update',[$post,$post->id])}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="mb-6">
          <div class="block">
              <x-label for="title" :value="__('Title')" class="mb-2" /><span
                  class="text-red-500">*</span>
          </div>
          <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post->title"
              required autofocus />
          <p class="text-red-500 text-semibold">{{ $errors->first('title') }}</p>
      </div>
    
      <div class="mb-6">
          <div class="block">
              <x-label for="content" :value="__('Content')" class="mb-2" /><span
                  class="text-red-500">*</span>
          </div>
          <x-textarea id="content" name="content" class="w-full" required>{{ old('content', $post->content) }}
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
</x-app-layout>
