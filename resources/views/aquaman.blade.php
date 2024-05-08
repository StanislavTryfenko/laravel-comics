@extends('layouts.app')

@section('title', 'Aquaman')

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-6 g-3">
                <div class="card">
                    <img src="{{ $aquaman[2]['thumb'] }}" class="card-img-top" style="width: 25rem;" alt="...">
                </div>
            </div>

            <div class="col-6 g-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $aquaman[2]['title'] }}</h5>
                        <p class="card-text">{{ $aquaman[2]['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: {{ $aquaman[2]['price'] }}</li>
                        <li class="list-group-item">Series: {{ $aquaman[2]['series'] }}</li>
                        <li class="list-group-item">Release Date: {{ $aquaman[2]['sale_date'] }}</li>
                        <li class="list-group-item">Type: {{ $aquaman[2]['type'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endSection
