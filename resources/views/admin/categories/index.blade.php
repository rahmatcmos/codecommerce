@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p><a href="{{ route('create_category') }}" class="btn btn-primary">New Category</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td class="text-center">ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="text-center">{{ $category->id }}</td>
                    <td><a href="{{  route('categories', array($category->id)) }}">{{ $category->name }}</a></td>
                    <td>{{ $category->description }}</td>
                    <td class="text-center">
                        <a href="{{ route('edit_category', array($category->id)) }}" class="btn btn-info btn-xs">Edit</a>
                        <a href="{{ route('confirm_delete_category', array($category)) }}" class="btn btn-danger btn-xs">Delete</a>                        
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $categories->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection