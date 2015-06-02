@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>New Image</h1>
            </div>
        </div>
    </div>
    @if($errors->any())
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['route' => ['store_image', $product], 'files' => true, 'class' => 'form form-horizontal']) !!}
            <div class='form-group'>
                {!! Form::label('image', 'Image: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::submit('Upload Image', ['class' => 'btn btn-primary btn-xs']) !!}
                <a href='{{ route('products_images', [$product]) }}' class='btn btn-danger btn-xs'>Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection