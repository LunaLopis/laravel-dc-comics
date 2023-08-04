@extends('layouts.app')
@section('content')   
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
               
                  @foreach ($comics as $comic)
                    <div class="col col-lg-2 col-md-4 col-sm-12">

                        <div class="card-body d-flex justify-content-between">
                            <a href="{{route('comics.edit', $comic )}}" class="text-decoration-none">modifica</a>

                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')                       
                                <button type="submit" class="text-decoration-none bg-danger" onclick="return confirm('sicuro di volerlo eliminare?')">elimina</button>
                            </form>
                        </div>
                        
                        
                        
                        <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
                            <div class="card mb-3" >
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