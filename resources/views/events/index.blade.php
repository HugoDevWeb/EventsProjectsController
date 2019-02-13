@extends('layouts.app')

@section('content')
    <h1>{{$events->count()}} {{ str_plural('Evenement', $events->count()) }}</h1>

    @if(count($events) > 0)
        <ul>
            @foreach($events as $event)
               <a href="{{ action('EventController@show', $event->id) }}"> <li>{{ $event->title }}</li> </a>
            @endforeach
        </ul>
    @else
    <p>Il n'y a aucun évènements</p>
    @endif

    <a href="{{ action('EventController@create') }}">Créer un événement</a>
@stop