@props(['post','comments','commentCount'])

<div class="post">
    <div class="post-block bg-green-100  flex gap-x-4 mb-2 border-2 border-green-200">
        <img src="https://picsum.photos/250/350/?random={{rand(1,20)}}">
        <div class="post-content p-4">
                <h1 class="font-semibold text-lg">{{$post->title}}</h1>
            <p class="text-sm"><span class="text-green-700">{{$post->user->username}}</span><span
                    class="ml-3">{{$post->created_at->format('m/d/Y (D) H:i:s')}}</span></p>
            <p>{{$post->content}}</p>
            <p class="mt-8">{{$commentCount}} Replies</p>
        </div>
    </div>

    @foreach ($comments as $comment)
        <x-post-comment :comment="$comment"></x-post-comment>
    @endforeach

</div>


