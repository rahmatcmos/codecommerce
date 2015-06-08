@extends('store.base')

@section('categories')
    @include('store.categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Tags</li>
            <li class="active">{{ $tag->name }}</li>
        </ol>
        <div class="features_items">
            @include('store.partials.productsListing', ['products' => $tag->products])
        </div>
    </div>
@stop