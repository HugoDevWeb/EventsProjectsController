@extends('layouts.app')

@section('content')
    <h1>Editer l'événement {{ $events->id }}</h1>

    <form action="{{ action('EventController@update', $events->id) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('put') }}

        <input type="text" name="title" placeholder="Titre de l'événement" value="{{ $events->title }}" )><br>
        {!! $errors->first('title', '<p class="error">:message</p>')  !!}
        <textarea name="description" id="" cols="30" rows="10" placeholder="Description de l'événement">{{ $events->description }}</textarea><br>
        {!! $errors->first('description', '<p class="error">:message</p>') !!}

        <input type="submit" value="Editer l'événement">
        <a href="{{ action('EventController@index') }}">Annuler</a>

    </form>
@stop