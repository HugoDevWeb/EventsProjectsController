@extends('layouts.app')

@section('content')
    <h1>Editer l'événement {{ $events->id }}</h1>

    <form action="{{ action('EventController@update', $events->id) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group">
            <label for="title" class="custom-control-label sr-only">Titre</label>
            <input type="text" id="title" name="title" placeholder="Titre de l'événement" class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}  " value="{{ $events->title }}">
            {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')  !!}
        </div>

        <div class="form-group">
            <label for="description" class="custom-control-label sr-only">Titre</label>
            <textarea id="description" name="description" cols="30" rows="10" placeholder="Description de l'événement" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} ">{{ $events->description }}</textarea>
            {!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
        </div>

        <div class="form-group">
        <input type="submit" value="Editer l'événement" class="btn btn-primary btn-block">
        </div>

        <a href="{{ action('EventController@index') }}">Annuler</a>

    </form>
@stop