@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="w-100 bg-black p-5 z-1 position-relative">
        <section class="container text-white">
            <h1>Comics</h1>
            <div class="row gy-4">
              <div class="col">
                <ul>
                    @foreach ( $data as $item )
                        <li><a href="#">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
              </div>
            </div>

        </section>
    </main>
@endsection
