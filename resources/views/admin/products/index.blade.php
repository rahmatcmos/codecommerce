@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Products</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p><a href="{{ route('create_product') }}" class="btn btn-primary">New Product</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td class="text-center">ID</td>
                        <td>Name</td>
                        <td class="text-center">Price</td>
                        <td class="text-center">Featured</td>
                        <td class="text-center">Recommend</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td><a href="{{  route('products', array($product->id)) }}">{{ $product->name }}</a></td>
                    <td class="text-right">$ {{ number_format($product->price, 2) }}</td>
                    <td class="text-center">@if($product->featured)<span class="glyphicon glyphicon-ok text-success"></span>@endif</td>
                    <td class="text-center">@if($product->recommend)<span class="glyphicon glyphicon-ok text-success"></span>@endif</td>
                    <td>
                        <a href="{{ route('edit_product', array($product->id)) }}" class="btn btn-info btn-xs btn-block">Edit</a> 
                        <a href="{{ route('confirm_delete_product', array($product)) }}" class="btn btn-danger btn-xs btn-block">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection