@extends('layouts.app')

@section('content')
    <h2>aggiorna {{ $comic['title'] }}<h2>

            <div class="form_container">
                {{-- form --}}
                <form method="POST" action="{{ route('comics.update', $comic->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form_section">
                        <label>inserisci il titolo</label>
                        <input type="text" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="form_section">
                        <label>inserisci la descrizione</label>
                        <input type="text" name="description" value="{{ $comic->description }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci un immagine di copertina</label>
                        <input type="text" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci il prezzo</label>
                        <input type="number" name="price" value="{{ $comic->price }}">
                    </div>
                    <div class="form_section">
                        <label>seleziona la serie</label>
                        <input type="select" name="series" value="{{ $comic->series }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci la data di vendita</label>
                        <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci il tipo</label>
                        <input type="text" name="type" value="{{ $comic->type }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci gli artisti</label>
                        <input type="text" name="artists" value="{{ $comic->artists }}">
                    </div>
                    <div class="form_section">
                        <label>inserisci gli autori</label>
                        <input type="text" name="writers" value="{{ $comic->writers }}">
                    </div>
                    <div class="form_section">
                        <input type="submit">
                    </div>
                </form>

            </div>
        @endsection
