@props(['boards'])

@php

$count = 1;

@endphp


@foreach ($boards as $board)
    @if ($count % 4 == 1)

        <div class="board-group">
            <ul class="leading-relaxed text-center">
    @endif

    <a href="/boards/{{$board->slug}}">
        <li class="block bg-indigo-200 hover:bg-indigo-300 mb-3 p-1 rounded-lg w-24">{{ $board->name }}</li>
    </a>
    @if ($count % 4 == 0)

        </ul>
        </div>
    @endif

    @php
    $count++;
    @endphp

@endforeach

@if ($count % 4 !=1)

        </ul>
        </div>
@endif
