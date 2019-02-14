@extends('layouts.app')

@section('content')
    <h1>Créer un événement</h1>

    <form action="{{ action('EventController@store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title" class="custom-control-label sr-only">Titre</label>
            <input type="text" id="title" name="title" placeholder="Titre de l'événement" class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}  ">
            {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')  !!}
        </div>

        <div class="form-group">
            <label for="description" class="custom-control-label sr-only">Titre</label>
            <textarea id="description" name="description" cols="30" rows="10" placeholder="Description de l'événement" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} "></textarea>
            {!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
        </div>

        <div class="form-group">
            <input type="submit" value="Créer un événement" class="btn btn-primary btn-block">
        </div>
    </form>
@stop