@props(['comment'])

<div class="post-comment bg-blue-100 px-4 py-6 mb-2 border-2 border-blue-200">
    <p class="text-sm"><span class="text-green-700">{{$comment->user->username}}</span><span class="ml-3">{{$comment->created_at->format('m/d/Y (D) H:i:s')}}</span></p>
    <p>{{$comment->content}}</p>
</div>