@extends('guest.template.base')

@section('title', 'DC - ' . $title)


@section('content')
    <main>
        <img src="{{ $comic['thumb'] }}">
        <h1>{{ $comic['series'] }}</h1>
        <h2>{{ $comic['title']}}</h2>
        <span>{{ $comic['price'] }}</span>
        <p>{!! $comic['description'] !!}</p>

        <div class="talent-specs">
            <h2>Talent</h2>
            <div class="artists">
                <span> Art by:</span>
                @foreach ($comic['artists'] as $item)
                    {{ $item }},
                @endforeach
            </div>

            <div class="writers">
                <span>Written by:</span>
                @foreach ($comic['writers'] as $item)
                    {{ $item }},
                @endforeach
            </div>

            <h2>Specs</h2>
            <span>Series:{{ $comic['series'] }}</span>
            <span>U.S Price{{ $comic['price'] }}</span>
            <span>On Sale Date:{{ $comic['sale_date'] }}</span>
        </div>


    </main>
@endsection
