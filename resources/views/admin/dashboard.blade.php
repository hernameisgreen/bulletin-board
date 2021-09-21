<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="{{asset('img/avatar.png')}}" alt="user's avatar" class="rounded-full h-48 border-4 border-indigo-400 inline-block mr-8">
                    <div class="inline-block w-2/4">
                        <h1 class="font-semibold text-black text-2xl">Hello there, <span class="text-green-500">{{ Auth::user()->username}}</span></h1>
                        <hr class="border-2 bt-3 border-green-500 my-2">
                        <h2 class="font-semibold text-indigo-500 text-xl">Fun Facts!</h2>
                        <div class="fact-blocks mt-3 flex gap-x-4">
                            <div class="bg-yellow-300 h-24 w-22 rounded-md p-2 text-center">Users Registered Today:<br><span class="text-indigo-600">{{$users_created_today}}</span></div>
                            <div class="bg-indigo-300 h-24 w-22 rounded-md p-2 text-center">Posts:<br><span class="text-indigo-600 ">{{$posts}}</span></div>
                            <div class="bg-green-300 h-24 w-22 rounded-md p-2 text-center">Comments:<br><span class="text-indigo-600">{{$comments}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
