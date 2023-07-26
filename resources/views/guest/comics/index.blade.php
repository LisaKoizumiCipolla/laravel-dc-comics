@extends('layouts.app')

@section('title', 'Index')

@section('main-section')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Comics</h1>
            <div class="">
                @foreach ($comicList as $comic)
                <article class="card" >
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic->price }}</li>
                            <li class="list-group-item">{{ $comic->series }}</li>
                            <li class="list-group-item">{{ $comic->sale_date }}</li>
                            <li class="list-group-item">{{ $comic->type }}</li>
                            <li class="list-group-item">{{ $comic->artists }}</li>
                            <li class="list-group-item">{{ $comic->writers }}</li>
                        </ul>
                        
                    
                </article >
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection