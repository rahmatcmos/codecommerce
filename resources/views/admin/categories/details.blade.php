@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Category {{ $category->name }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>{{ $category->description }}</p>
            <a href="{{ route('categories') }}" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        </div>
    </div>
</div>
@endsection