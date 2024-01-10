@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main class="w-100 bg-black p-5 position-relative z-1">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 g-3">
                        <img class="my-card-img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div>
                            <h5 class="text-white m-0">{{ $comic->title }}</h5>
                            <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">More info</a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger" data-item-title="{{ $comic->title }}">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-5">
                    <button class="bg-primary py-3 px-5 text-white text-uppercase fs-5">
                        load more
                    </button>
                </div>
            </div>
        </div>
    </main>
@include('partials.modal_delete')
@endsection
