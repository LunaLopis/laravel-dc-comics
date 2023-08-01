@extends('layouts.app')

@section('content')

    <div>
        <h1 class="text-primary">{{$comic->title}}</h1>
        <h3>{{$comic->type}}</h3>
        <h3>descrizione:</h3>
        <span>{{$comic->description}}</span>
        <h3>prezzo: {{$comic->price}}</h3>
        <div class="d-flex">
            <h2>written by: </h2>
            {{ $comic->writers }}           
        </div>
        <div class="d-flex">
            <h2>art by: </h2>
            {{ $comic->artists }}           
        </div>
    </div>

@endsection