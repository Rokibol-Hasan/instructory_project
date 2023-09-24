@extends('master')
@section('title')
Service
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $page_name }}</h1>
            <ul>
                @for ($index = 0; $index < count($services); $index++)
                    <li>{{ $services[$index] }}</li>
                @endfor
            </ul>
        </div>
    </div>
@endsection
