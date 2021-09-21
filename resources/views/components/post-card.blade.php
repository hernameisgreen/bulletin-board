@props(['post', 'comments', 'commentCount'])

<div class="post">
    <div class="post-block bg-green-100  flex gap-x-4 mb-2 border-2 border-green-200">
        <img src="{{ asset('storage/' . $post->img) }}" >
        <div class="post-content p-4">
            <h1 class="font-semibold text-lg">{{ $post->title }}</h1>
            <p class="text-sm"><span class="text-green-700">{{ $post->user->username }}</span><span
                    class="ml-3">{{ $post->created_at->format('m/d/Y (D) H:i:s') }}</span></p>
            <p>{{ $post->content }}</p>
            <h2 class="mt-5 font-semibold text-lg text-indigo-500">What do you think?</h2>

            @auth
                <form action="/boards/{{$post->board->slug}}/posts/{{$post->serial}}" method="post" class="mt-4">
                    @csrf
                    <x-textarea id="content" name="content" class="w-full"
                        placeholder="Come on, tell us what you think!(wink)">{{ old('content') }}</x-textarea>

                        <div class="mt-4"><input type="submit" value="Submit" class="w-3/12 h-10 rounded-full bg-green-400 hover:bg-green-500 cursor-pointer"></div>
                </form>
            @else
                <p class="mt-4 text-lg"><a href="/login" class="underline text-blue-500 font-semibold">Login</a> or <a
                        href="/register" class="underline text-blue-500 font-semibold">Register</a> to join the conversaion!
                </p>
            @endauth

        </div>
    </div>
    <div class="mt-8">
        <p class="">{{ $commentCount }} Replies</p>
    </div>
    @foreach ($comments as $comment)
        <x-post-comment :comment="
            $comment">
            </x-post-comment>
            @endforeach

    </div>
