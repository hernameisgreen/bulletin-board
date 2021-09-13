<x-settings>
    <x-layout>
        <x-nav></x-nav>
        <section class="px-6 py-6 col-span-12">
            <main class="max-w-lg mx-auto mt-10">
                <div class="content_wrapper p-6 border border-green-200 rounded-xl">
                    <h1 class="text-center font-bold text-xl">Log In</h1>
                    <form action="/register" method="post">
                        @csrf
                            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-6">Name</label>
                            <input type="text" name="name" class="border border-gray-200 p-2 w-full rounded focus:ring-green-300">
                            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-6">Username</label>
                            <input type="text" name="username" class="border border-gray-200 p-2 w-full rounded focus:ring-green-300">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-6">Email</label>
                            <input type="email" name="email" class="border border-gray-200 p-2 w-full rounded focus:ring-green-300">
                            <label for="pw" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-6">Password</label>
                            <input type="password" name="pw" class="border border-gray-200 p-2 w-full rounded focus:ring-green-300">
                            <input type="submit" value="Sign In" class="mt-6 bg-indigo-300 px-6 py-2 rounded-lg hover:bg-indigo-400">
                    </form>
                </div>
            </main>
        </section>
    </x-layout>
</x-settings>