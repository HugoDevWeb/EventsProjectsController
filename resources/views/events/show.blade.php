@extends('layouts.app')

@section('content')
    <h1>{{ $events->title }}</h1>

    <h2>{{ $events->description }}</h2>

    <a href="{{ route('home') }}">Retour aux événements</a>
    <a href="{{ action('EventController@edit', $events->id) }}">Modifer l'événement</a>

    <form action="{{ action('EventController@destroy', $events->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <input type="submit" value="supprimer">
    </form>
@stop