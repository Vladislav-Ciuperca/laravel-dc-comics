@extends('layouts.app')

@section('content')
    <h2>CREA UN NUOVO FUMETTO<h2>

            <div class="form_container">
                {{-- form --}}
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf

                    <div class="form_section">
                        <label>inserisci il titolo</label>
                        <input type="text" name="title">
                    </div>

                    <div class="form_section">
                        <label>inserisci la descrizione</label>
                        <input type="text" name="description">
                    </div>
                    <div class="form_section">
                        <label>inserisci un immagine di copertina</label>
                        <input type="text" name="thumb">
                    </div>
                    <div class="form_section"> 
                        <label>inserisci il prezzo</label>
                        <input type="number" name="price">
                    </div>
                    <div class="form_section">
                        <label>seleziona la serie</label>
                        <input type="select" name="series">
                    </div>
                    <div class="form_section">
                        <label>inserisci la data di vendita</label>
                        <input type="date" name="sale_date">
                    </div>
                    <div class="form_section">
                        <label>inserisci il tipo</label>
                        <input type="text" name="type">
                    </div>
                    <div class="form_section">
                        <label>inserisci gli artisti</label>
                        <input type="text" name="artists">
                    </div>
                    <div class="form_section">
                        <label>inserisci gli autori</label>
                        <input type="text" name="writers">
                    </div>
                    <div class="form_section">
                        <input type="submit">
                    </div>
                </form>

            </div>
        @endsection
