@extends('layouts.app')

@section('content')
    <h2>QUESTA E LA LISTA DEI FUMETTI</h2>




    <div class="container">

        @foreach ($catalogo as $indice=> $fumetto)
            <div class="card">
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
                <div class="bottoni">
                    <button>
                        <a href="http://localhost:8000/comics/{{ $fumetto->id }}">Vedi di piu</a>
                    </button>
                    <button>
                        <a href="http://localhost:8000/comics/{{ $indice }}/edit">modifica</a>
                    </button>
                </div>
            </div>
        @endforeach

    </div>
@endsection
