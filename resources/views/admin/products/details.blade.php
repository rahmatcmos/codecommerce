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
            <div class="col-sm-6">
                <h5>Tags</h5>
                @foreach($product->tags as $tag)
                <span class="label label-primary">{{ $tag->name }}</span>
                @endforeach
            </div>
            @foreach($product->images as $image)
            <div class="col-sm-3 col-lg-4">
                <img src='{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $image->id.'.'.$image->extension) }}' class="img img-responsive" />
            </div>
            @endforeach            
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <p>
                <a href="{{ route('products') }}" class="btn btn-primary btn-xs">
                    <span class="glyphicon glyphicon-chevron-left"></span> Back
                </a>
            </p>
        </div>
    </div>
</div>
@endsection