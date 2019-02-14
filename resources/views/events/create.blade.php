@extends('layouts.app')

@section('content')
    <h1>Créer un événement</h1>

    <form action="{{ action('EventController@store', $events->id) }}" method="post">
        {{ csrf_field() }}

        @include('events._form', ['submitButtonText' => "Créer un événement"])

    </form>
@stop