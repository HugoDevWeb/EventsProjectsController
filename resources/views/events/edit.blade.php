@extends('layouts.app')

@section('content')
    <h1>Editer l'événement {{ $events->title }}</h1>

    <form action="{{ action('EventController@update', $events->id) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('put') }}

        @include('events._form', ['submitButtonText' => "Modifier l'événement"])

        <a href="{{ action('EventController@index') }}">Annuler</a>

    </form>
@stop