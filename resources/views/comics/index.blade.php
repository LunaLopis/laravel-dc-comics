@extends('layouts.app')
@section('content')   
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
                
                  @foreach ($comics as $comic)
                    <div class="col col-lg-2 col-md-4 col-sm-12">
                        <a href="{{ route('comics.index', $comic->id) }}">
                            <div class="card mb-3 " >
                                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$comic->title}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
@endsection