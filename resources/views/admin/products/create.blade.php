@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>New Product</h1>
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
            {!! Form::open(['route' => ['new_product'], 'class' => 'form form-horizontal']) !!}
            <div class='form-group'>
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('price', 'Price: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::input('number', 'price', null, ['class' => 'form-control', 'step' => 0.01, 'min' => 0.01]) !!}
                </div>
            </div>
            <div class='form-group'>
                <div class='col-sm-6'>
                    {!! Form::label('featured', 'Featured', ['class' => 'col-sm-5 control-label']) !!}
                    <div class='col-sm-7'>
                        <div class='radio'>
                            <label>
                                {!! Form::radio('featured', 1, false) !!} Yes
                            </label>
                        </div> 
                        <div class='radio'>
                            <label>
                                {!! Form::radio('featured', 0, true) !!} No
                            </label>
                        </div> 
                    </div>
                </div>
                <div class='col-sm-6'>
                {!! Form::label('recommend', 'Recommend', ['class' => 'col-sm-5 control-label']) !!}
                    <div class='col-sm-7'>
                        <div class='radio'>
                            <label>
                                {!! Form::radio('recommend', 1, false) !!} Yes
                            </label>
                        </div> 
                        <div class='radio'>
                            <label>
                                {!! Form::radio('recommend', 0, true) !!} No
                            </label>
                        </div> 
                    </div>
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('category', 'Category: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('tags', 'Tags: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                {!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
                <a href='{{ route('products') }}' class='btn btn-danger'>Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection