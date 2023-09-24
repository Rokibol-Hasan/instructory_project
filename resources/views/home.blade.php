@extends('master')
@section('title')
Home
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $page_name }}</h1>
                <p> {{ $course_name }} </p>
            </div>
        </div>
    </div>
@endsection
