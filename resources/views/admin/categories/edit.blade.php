@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Edit Category {{ $category->name }}</h1>
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
            {!! Form::open(['route' => ['update_category', $category], 'method' => 'put', 'class' => 'form form-horizontal']) !!}            
            <div class='form-group'>
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                    {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class='col-sm-10'>
                    {!! Form::textarea('description', $category->description, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group'>                
                {!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
                <a href='{{ route('categories') }}' class='btn btn-danger'>Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection