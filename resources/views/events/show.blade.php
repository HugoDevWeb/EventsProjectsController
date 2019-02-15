@extends('layouts.app')

@section('content')
    <h1>{{ $events->title }}</h1>

    <h2>{{ $events->description }}</h2>


    <a class="btn btn-dark" href="{{ action('EventController@edit', $events->id) }}">Modifer l'événement</a>
    <a href="{{ action('EventController@destroy', $events->id) }}" data-method="DELETE" data-confirm="Cet événement va être supprimé" class="btn btn-danger">Supprimer</a>



    {{--<form action="{{ action('EventController@destroy', $events->id) }}" method="post" class="d-inline-block"--}}
          {{--id="form_show" onsubmit="return confirm('Voulez-vous suprimer ce message ?') ">--}}
        {{--{{ csrf_field() }}--}}
        {{--{{ method_field('delete') }}--}}
        {{--<input type="submit" value="supprimer" class="btn btn-danger">--}}
    {{--</form>--}}

    <hr>

    <p><a href="{{ route('home') }}">Retour aux événements</a></p>
@stop