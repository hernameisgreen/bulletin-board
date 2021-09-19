@props(['boards'])

@php

$count = 1;

@endphp


@foreach ($boards as $board)
    @if ($count % 4 == 1)

        <div class="board-group">
            <ul>
    @endif

    <a href="/boards/{{$board->slug}}">
        <li>{{ $board->name }}</li>
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
