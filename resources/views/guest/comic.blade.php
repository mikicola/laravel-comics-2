@extends('guest.template.base')

@section('title', 'DC - ' . $title)


@section('content')
    <img src="{{ $comic['thumb'] }}">
    <h1>{{ $comic['series'] }}</h1>
    <h2>{{ $comic['title']}}</h2>
    <p>{{ $comic['description'] }}</p>
@endsection
