@extends('layouts.app')

@section('content')
    <h1>Créer un événement</h1>

    <form action="{{ action('EventController@store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Titre de l'événement")><br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Description de l'événement"></textarea><br>
        <input type="submit" value="Créer un événement">
    </form>
@stop