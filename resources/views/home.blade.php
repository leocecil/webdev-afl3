@extends('base.base')
@section('content')
    <h1>My Home Page</h1>
    <p> product name: {{ $product_name }} </p>
    <p> category: {{ $category }} </p>
    {!! $button !!}
@endsection