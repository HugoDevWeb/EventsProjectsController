@extends('layouts.app')

@section('content')
    <h1>{{$events->count()}} {{ str_plural('Evenement', $events->count()) }}</h1>

    @if(count($events) > 0)
        <ul>
            @foreach($events as $event)
                <a href="{{ action('EventController@show', $event->slug) }}">
                    <li>{{ $event->title }}</li>
                </a>
            @endforeach
        </ul>

        {{ $events->links() }}
    @else
        <p>Il n'y a aucun évènements</p>
    @endif
@stop