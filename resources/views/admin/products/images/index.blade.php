@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>{{ $product->name }} Images</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p><a href="{{ route('create_image', [$product]) }}" class="btn btn-primary btn-xs">New Image</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td class="text-center">ID</td>
                        <td>Image</td>
                        <td class="text-center">Extension</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($product->images as $image)
                <tr>
                    <td class="text-center">{{ $image->id }}</td>                    
                    <td class="text-center"><img src='{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $image->id.'.'.$image->extension) }}' height="50" /></td>                    
                    <td class="text-right">.{{ $image->extension }}</td>
                    <td class="text-center"><a href="{{ route('detele_image', [$product, 'id' => $image->id]) }}" class="btn btn-danger btn-xs">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <a href='{{ route('products') }}' class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        </div>
    </div>
</div>
@endsection