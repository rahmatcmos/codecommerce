<!DOCTYPE html>
<html>
    <head>
        <title>Code Commerce - Categories</title>
    </head>
    <body>
        <h1>Category {{ $category->name }}</h1>
        <p>{{ $category->description }}</p>
        <a href="{{ route('categories') }}">< Back</a>
    </body>
</html>