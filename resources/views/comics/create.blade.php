@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="titolo" value="{{old('title')}}">
                        @error('title')
                        <div class="invalid-feedback"> {{$message}}</div>
                        @enderror
                    </div>
                

                
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="description" value="{{old('description')}}">
                    </div>
               

           
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb" name="thumb" class="form-control" placeholder="thumb" value="{{old('thumb')}}">
                    </div>
             
            
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="cover_image" value="{{old('cover_image')}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb2" name="thumb2" class="form-control" placeholder="thumb2" value="{{old('thumb2')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="price" value="{{old('price')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="series" name="series" class="form-control" placeholder="series" value="{{old('series')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="sale_date" value="{{old('sale_date')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="type" value="{{old('type')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="artists" name="artists" class="form-control" placeholder="artists" value="{{old('artists')}}">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="writers" name="writers" class="form-control" placeholder="writers" value="{{old('writers')}}">
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