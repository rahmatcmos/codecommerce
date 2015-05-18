<!DOCTYPE html>
<html>
    <head>
        <title>Code Commerce - Categories</title>
    </head>
    <body>
        <h1>Categories</h1>
        <ul>
            @foreach($categories as $category)
            <li><a href="{{  route('categories', array($category->id)) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </body>
</html>