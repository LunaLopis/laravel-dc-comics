@extends('layouts.app')

@section('content')   
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">                
                @include('index', ['comics' => $comics])
            </div>
        </div>
    </section>
@endsection