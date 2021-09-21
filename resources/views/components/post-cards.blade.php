@props(['posts'])

@foreach ($posts as $post)

    
<div class="post">
    <div class="post-block bg-green-100  flex gap-x-4 mb-2 border-2 border-green-200 max-h-52">
        <img src="{{ asset('storage/' . $post->img) }}" class="w-40">
        <div class="post-content p-4">
            <a href="/boards/{{$post->board->slug}}/posts/{{$post->serial}}">
                <h1 class="font-semibold text-lg">{{$post->title}}</h1>
            </a>
            <p class="text-sm"><span class="text-green-700">{{$post->user->username}}</span><span
                    class="ml-3">09/16/21(Thu)14:49:30</span></p>
            <p>{{mb_substr($post->content,0,250)}}</p>
        </div>
    </div>
</div>

@endforeach

