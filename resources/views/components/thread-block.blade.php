@props(['posts'])


@php

$count = 1;

@endphp

@foreach ($posts as $post)

    @if ($count % 4 == 1)

        <div class="threads_list  px-6 py-4 flex justify-between gap-x-4">


    @endif

    <div class="thread_block">
        <p class="text-center text-green-600 font-semibold">{{ $post->board->name }}</p>
        <img src="https://picsum.photos/150/150?random={{ rand(1, 10) }}>">
        <a href="/boards/{{$post->board->slug}}/posts/{{$post->serial}}">
            <p class="text-center font-semibold" style="max-width: 150px">{{ $post->title }}</p>
        </a>
    </div>

    @if ($count % 4 == 0)
        </div>
    @endif

    @php
        $count++;
    @endphp

@endforeach
