@extends('layouts.app')

@section('content')
    <h2>CREA UN NUOVO FUMETTO<h2>
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="form_container">
                {{-- form --}}
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf

                    <div class="form_section">
                        <label>inserisci il titolo</label>
                        <input type="text" name="title" required>
                    </div>

                    <div class="form_section">
                        <label>inserisci la descrizione</label>
                        <input type="text" name="description" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci un immagine di copertina</label>
                        <input type="text" name="thumb" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci il prezzo</label>
                        <input type="number" name="price" required>
                    </div>
                    <div class="form_section">
                        <label>seleziona la serie</label>
                        <input type="select" name="series" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci la data di vendita</label>
                        <input type="date" name="sale_date" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci il tipo</label>
                        <input type="text" name="type" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci gli artisti</label>
                        <input type="text" name="artists" required>
                    </div>
                    <div class="form_section">
                        <label>inserisci gli autori</label>
                        <input type="text" name="writers" required>
                    </div>
                    <div class="form_section">
                        <input type="submit">
                    </div>
                </form>

            </div>
        @endsection
