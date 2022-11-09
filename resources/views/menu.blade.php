@extends('template')

@section('title', 'Session 6 | Menu Page')



@section('content')
    <div class="container-fluid">
        <h1 class="text-center" style="margin-top: 30px">
            Foods
        </h1>
        <div class="row row-cols-3 justify-content-md-center" style="margin-bottom: 30px">
            @foreach($foods as $d)
                @include('produk')
            @endforeach
        </div>
        <h1 class="text-center" style="margin-top: 30px">
            Drinks
        </h1>
        <div class="row row-cols-3 justify-content-md-center" style="margin-bottom: 30px">
            @foreach($drinks as $d)
                @include('produk')
            @endforeach
        </div>
        <h1 class="text-center" style="margin-top: 30px">
            Sides
        </h1>
        <div class="row row-cols-3 justify-content-md-center" style="margin-bottom: 30px">
            @foreach($sides as $d)
                @include('produk')
            @endforeach
        </div>
    </div>
@endsection
