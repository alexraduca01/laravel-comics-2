@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <main class="w-100 p-5">
        <div class="container">
            <div class="row">
                <div class="g-3">
                    <img style="position: relative; top: -125px; left: 0;" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="row justify-content-between ">
                        <div class="col-8">
                            <div>
                                <h2 class="m-0 fs-1">{{ $comic->title }}</h2>
                            </div>
                            <div class="w-100 p-3 bg-success">
                                <p class="fs-3 text-white m-0">Price: {{ $comic->price }}</p>
                            </div>
                            <div>
                                <p class="fs-4 mt-3" style="line-height: 2.4em;"> {{ $comic->description }}</p>
                            </div>
                            <div>
                                <p class="fs-4 text-warning">Type: {{ $comic->type }}</p>
                                <p class="fs-4 text-warning">Series: {{ $comic->series }}</p>
                                <p class="fs-4 text-warning">On sale date: {{ $comic->sale_date }}</p>
                            </div>
                        </div>
                        <div class="col-4" style="transform: translate(0, -40px)">
                            <p class="fs-3 text-uppercase text-secondary">advertisment</p>
                            <div>
                                <img src="../img/adv.jpg" class="w-100" alt="adv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
