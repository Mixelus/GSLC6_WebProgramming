@extends('template')

@section('title', 'Session 6 | Foods Page')



@section('content')
    <div class="row row-cols-3 justify-content-md-center" style="margin-top: 30px">
        @foreach($foods as $d)
            @include('display_produk')
        @endforeach
    </div>
@endsection
