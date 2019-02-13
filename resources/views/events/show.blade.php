@extends('layouts.app')

@section('content')
    <h1>{{ $events->title }}</h1>

    <h2>{{ $events->description }}</h2>

    <a href="{{ route('home') }}">Retour aux événements</a>
@stop