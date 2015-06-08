@extends('store.base')

@section('categories')
    @include('store.categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">    
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Categories</li>
            <li class="active">{{ $category->name }}</li>
        </ol>
    <div class="features_items">
        @include('store.partials.productsListing', ['products' => $category->products])
    </div>    
</div>
@stop