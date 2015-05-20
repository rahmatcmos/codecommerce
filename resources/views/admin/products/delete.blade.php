@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Are you sure?</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>Are you sure you wish to delete the product <strong>{{ $product->name }}</strong>?</p>
            <blockquote class="text-danger"><strong>This operation cannot be undone!</strong></blockquote>
            {!! Form::open(['route' => ['delete_product', $product], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            <a href="{{ route('products') }}" class="btn btn-primary">Cancel</a>
            {!! Form::close() !!}                    
        </div>
    </div>
</div>
@endsection