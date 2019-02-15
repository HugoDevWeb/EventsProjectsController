<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EventBrote</title>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>

@include('layouts.partials._nav')

<div class="container">
    @if(session()->has('notification.message'))
        <div class="alert alert-{{session('notification.type')}}">
            {{ session()->get('notification.message') }}
        </div>
    @endif
    @yield('content')
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="{{ asset('/js/app.js') }}"></script>
@include('flashy::message')
</body>
</html>