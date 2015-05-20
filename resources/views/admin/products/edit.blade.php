@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Product Update: {{ $product->name }}</h1>
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
            {!! Form::open(['route' => ['update_product', $product], 'method' => 'put', 'class' => 'form form-horizontal']) !!}
            <div class='form-group'>
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('price', 'Price: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::input('number', 'price', $product->price, ['class' => 'form-control', 'step' => 0.01, 'min' => 0.01]) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('featured', 'Featured', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                    <div class='radio'>
                        <label>
                            {!! Form::radio('featured', 1, $product->featured) !!} Yes
                        </label>
                    </div> 
                    <div class='radio'>
                        <label>
                            {!! Form::radio('featured', 0, !$product->featured) !!} No
                        </label>
                    </div> 
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('recommend', 'Recommend', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                    <div class='radio'>
                        <label>
                            {!! Form::radio('recommend', 1, $product->recommend) !!} Yes
                        </label>
                    </div> 
                    <div class='radio'>
                        <label>
                            {!! Form::radio('recommend', 0, !$product->recommend) !!} No
                        </label>
                    </div> 
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('category', 'Category: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::select('category_id', $categories, $product->category ? $product->category->id : null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::submit('Update Product', ['class' => 'btn btn-primary']) !!}
                <a href='{{ route('products') }}' class='btn btn-danger'>Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection