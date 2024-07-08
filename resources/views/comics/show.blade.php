@extends('layouts.app')

@section('content')
 


    <div class="singleCard">

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
    </div>
@endsection
