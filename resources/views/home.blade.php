@extends('layouts.app')

@section('title', 'DC Homepage')

@section('content')
    <main class="bg-dark">
        <div class="container py-5">
            <div class="row">
                @foreach ($comics as $index => $comic) 
                <div class="col-2 g-3"> 
                        <div class="card border-0 bg-dark">
                            <a href="{{ route('comic', $index) }}">
                                <img src="{{ $comic["thumb"] }}" class="card-img-top h_20rem" alt="">
                            </a>
                            
                            <div class="card-body">
                                <h6 class="card-text text-light">{{ $comic["series"] }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection