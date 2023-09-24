@extends('master')
@section('title')
    Contact
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $page_name }}</h1>
            @include('partial.product')
            <p> Product Count: {{ $product_count }} </p>
        </div>
    </div>
@endsection
