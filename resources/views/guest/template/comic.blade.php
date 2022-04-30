@extends('guest.template.base')

@section('title', $title)
{{-- @section('title', 'DC - Comics') --}}


@section('content')
    <h1>{{ $comic['title'] }}</h1>
@endsection
