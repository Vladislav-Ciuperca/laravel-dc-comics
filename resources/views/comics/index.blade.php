@extends('layouts.app')

@section('content')
    <h2>QUESTA E LA LISTA DEI FUMETTI</h2>




    <div class="container">

        @foreach ($catalogo as $fumetto)
            <div class="card">
                <a href="http://localhost:8000/comics/{{ $fumetto->id }}">
                    {{-- parter sopra --}}
                    <div class="title">
                        <p>{{ $fumetto->title }}</p>
                    </div>
                    {{-- immagine --}}
                    <img src="{{ $fumetto->thumb }}" alt="">
                    {{-- parte sotto --}}
                    <div class="info">
                        <span>${{ $fumetto->price }}</span>
                        <span>{{ $fumetto->series }}</span>
                        <span>{{ $fumetto->sale_date }}</span>
                    </div>
                    <div class="desc">{{ $fumetto->description }}</div>
                    <div class="footer_card">
                        <span>{{ $fumetto->artists }}</span>
                        <span>{{ $fumetto->writers }}</span>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
@endsection
