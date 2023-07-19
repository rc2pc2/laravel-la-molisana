@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    {{-- @dd($headerLinks) --}}
    <h1>
        Lista prodotti:
    </h1>
    <div class="pasta-products">
        @foreach ( $pastas as $pastaProduct)
            <article>
                <h3>
                    {{ $pastaProduct['titolo'] }}
                </h3>
                <div class="picture">
                    <img src="{{ $pastaProduct['src'] }}" alt="">
                </div>
                <p class="cooking-time">
                    {{ $pastaProduct['cottura'] }}
                </p>
            </article>
        @endforeach
    </div>









@endsection
