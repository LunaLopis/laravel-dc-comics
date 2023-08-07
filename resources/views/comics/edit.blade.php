@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="titolo" value="{{old('title') ?? $comic->title}}">
                    </div>
                
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="description" value="{{$comic->description}}">
                    </div>
               

           
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb" name="thumb" class="form-control" placeholder="thumb" value="{{$comic->thumb}}">
                    </div>
             
            
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="cover_image" value="{{$comic->cover_image}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb2" name="thumb2" class="form-control" placeholder="thumb2" value="{{$comic->thumb2}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="price" value="{{$comic->price}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="series" name="series" class="form-control" placeholder="series" value="{{$comic->series}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="sale_date" value="{{$comic->sale_date}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="type" value="{{$comic->type}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="artists" name="artists" class="form-control" placeholder="artists" value="{{$comic->artists}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="writers" name="writers" class="form-control" placeholder="writers" value="{{$comic->writers}}">
                    </div>
                    
                <div class="form-group">
                    <button type="submit">salva</button>
                </div>
                </form>

                {{-- validazione --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li> {{$error}}</li>                        
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection