@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $page_name }}</h1>
            @if ($product_count < 10)
                <p> Need to refill product </p>
            @else
                <p> Product Count: {{ $product_count }} </p>
            @endif



            @switch($color)
                @case('blue')
                    <p>Blue color product is available</p>
                @break

                @case('red')
                    <p>Red color product is available</p>
                @break

                @case('green')
                    <p>Green color product is available</p>
                @break

                @default
                    <p> No product available </p>
            @endswitch
        </div>
    </div>
@endsection
