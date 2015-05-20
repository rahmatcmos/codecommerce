@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Product {{ $product->name }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>Category: {{ $product->category ? $product->category->name : 'none' }}</p>
            <p>{{ $product->description }}</p>
            <p>$ {{ number_format($product->price, 2) }}</p>
            <p>Featured: {{ $product->featured ? 'Yes' : 'No' }}</p>
            <p>Recommend: {{ $product->recommend ? 'Yes' : 'No' }}</p>
            <a href="{{ route('products') }}" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        </div>
    </div>
</div>
@endsection