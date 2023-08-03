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
                        <input type="text" id="title" name="title" class="form-control" placeholder="titolo">
                    </div>
                

                
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="description">
                    </div>
               

           
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="thumb" id="thumb" name="thumb" class="form-control" placeholder="thumb">
                    </div>
             
            
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb" name="thumb" class="form-control" placeholder="thumb">
                    </div>
   
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb" name="cover_image" class="form-control" placeholder="cover_image">

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="thumb2" name="thumb2" class="form-control" placeholder="thumb2">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="price">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="series" name="series" class="form-control" placeholder="series">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="sale_date">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="type">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="artists" name="artists" class="form-control" placeholder="artists">
                    </div>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <input type="text" id="writers" name="writers" class="form-control" placeholder="writers">
                    </div>
                    
                <div class="form-group">
                    <button type="submit">salva</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection