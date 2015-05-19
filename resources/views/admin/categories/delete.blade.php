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
            <p>Are you sure you want to delete category <strong>{{ $category->name }}</strong>?</p>
            <blockquote class="text-danger"><strong>This operation cannot be undone!</strong></blockquote>
            {!! Form::open(['route' => ['delete_category', $category], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            <a href="{{ route('categories') }}" class="btn btn-primary">Cancel</a>
            {!! Form::close() !!}                    
        </div>
    </div>
</div>
@endsection