<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>
<div class="max-w-6xl mx-auto mt-4">
    @if ($posts->isEmpty())

        <h1 class="text-center font-bold text-indigo-500 mt-16">You don't have any posts yet! Come back when you've got some! :)</h1>
    
    @else
       
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Content Excerpt
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Author
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Posted
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Delete</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($posts as $post)
                        
                   
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div>
                         {{$post->title}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{mb_substr($post->content,0,15).'...'}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <p class="text-gray-900">{{Auth::user()->username}}</p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <p class="text-gray-500 text-sm">{{$post->created_at->format('Y-m-d H:i:s')}}</p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="posts/{{$post->id}}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <form action="{{route('user.posts.destroy',[$post,$post->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="text-red-600 hover:text-red-900">Delete</button>
                      </form>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endif
</x-app-layout>