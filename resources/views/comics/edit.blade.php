@extends('layouts.app')

@section('title', 'Edit' . $comic->title)

@section('content')
    <main class="w-100 p-5 position-relative z-1">
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
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        {{-- token di sicurezza --}}
                        @csrf
                        @method('PUT')
                        <input class="form-control mb-2 @error('title') is-invalid @enderror" value="{{old('title', $comic->title) }}" type="text" placeholder="Inserisci un titolo" id="title" name="title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('description', $comic->description) }}" type="text" placeholder="Inserisci una descrizione" id="decription" name="description">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('thumb', $comic->thumb) }}" type="text" placeholder="Inserisci url immagine" id="thumb" name="thumb">
                        @error('thumb')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('price', $comic->price) }}" type="text" placeholder="Inserisci un prezzo" id="price" name="price">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('series', $comic->series) }}" type="text" placeholder="Inserisci la serie" id="series" name="series">
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('sale_date', $comic->sale_date) }}" type="text" placeholder="Inserisci data di vendita" id="sale_date" name="sale_date">
                        @error('sale_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" value="{{old('type', $comic->type) }}" type="text" placeholder="Inserisci un tipo" id="type" name="type">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-success">invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
