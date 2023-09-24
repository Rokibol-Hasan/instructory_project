@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $page_name }}</h1>
            <ul>
                @foreach ($products as $key => $product)
                    <li>
                        <p><strong>Product Number:</strong> {{ $key }}</p>
                        <div>
                            <p> {{ $product['product_name'] }} </p>
                            <p> {{ $product['color'] }} </p>
                            <p> {{ $product['price'] }} </p>
                        </div>
                    </li>
                @endforeach
            </ul>
            <p> Product Count: {{ $product_count }} </p>
        </div>
    </div>
@endsection
