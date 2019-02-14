@extends('layouts.app')

@section('content')
    <h1>{{ $events->title }}</h1>

    <h2>{{ $events->description }}</h2>


    <a class="btn btn-dark" href="{{ action('EventController@edit', $events->id) }}">Modifer l'événement</a>

    <form action="{{ action('EventController@destroy', $events->id) }}" method="post" class="d-inline-block" id="form_show">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <input type="submit" value="supprimer" class="btn btn-danger">
    </form>

    <hr>

    <p><a href="{{ route('home') }}">Retour aux événements</a></p>
@stop