@extends('layouts.app')

@section('title', "Comic Create")

@section('content')
    <main class="w-100 p-5">
        <div class="container">
            <div class="row">
                <div class="g-3">
                    <form action="{{ route('comics.store') }}" method="POST">
                        {{-- token di sicurezza --}}
                        @csrf

                        <input class="form-control" type="text" placeholder="Inserisci un titolo" id="title" name="title">
                        <input class="form-control" type="text" placeholder="Inserisci una decsrizione" id="decription" name="description">
                        <input class="form-control" type="text" placeholder="Inserisci un prezzo" id="price" name="price">
                        <input class="form-control" type="text" placeholder="Inserisci un titolo" id="title" name="title">
                        <input class="form-control" type="text" placeholder="Inserisci un tipo" id="type" name="type">
                        <button type="submit">invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
