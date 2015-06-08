@extends('store.base')

@section('categories')
    @include('store.categories')
@stop

@section('content')
    @include('store.productDetails');
@stop