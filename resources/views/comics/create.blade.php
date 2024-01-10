@extends('layouts.app')

@section('title', "Comic Create")

@section('content')
    <main class="w-100 p-5 position-relative z-1 bg-white">
        @if ($errors->any())
            <div class="alert  alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-black">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="g-3">
                    <form action="{{ route('comics.store') }}" method="POST">
                        {{-- token di sicurezza --}}
                        @csrf

                        <input class="form-control mb-2 @error('title') is-invalid @enderror" type="text" placeholder="Inserisci un titolo" id="title" name="title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" type="text" placeholder="Inserisci una descrizione" id="decription" name="description">
                        <input class="form-control mb-2" type="text" placeholder="Inserisci url immagine" id="thumb" name="thumb">
                        <input class="form-control mb-2" type="text" placeholder="Inserisci un prezzo" id="price" name="price">
                        <input class="form-control mb-2" type="text" placeholder="Inserisci la serie" id="series" name="series">
                        <input class="form-control mb-2" type="text" placeholder="Inserisci data di vendita" id="sale_date" name="sale_date">
                        <input class="form-control mb-2" type="text" placeholder="Inserisci un tipo" id="type" name="type">
                        <button type="submit" class="btn btn-success">invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
