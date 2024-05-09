@extends('layouts.app')

@section('title', 'DC' . $comic['series'])

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-6 g-3">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" style="width: 25rem;" alt="...">
                </div>
            </div>

            <div class="col-6 g-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">{{ $comic['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: {{ $comic['price'] }}</li>
                        <li class="list-group-item">Series: {{ $comic['series'] }}</li>
                        <li class="list-group-item">Release Date: {{ $comic['sale_date'] }}</li>
                        <li class="list-group-item">Type: {{ $comic['type'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endSection
