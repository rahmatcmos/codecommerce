<!DOCTYPE html>
<html>
    <head>
        <title>Code Commerce - Products</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            @foreach($products as $product)
            <li>{{ $product->name }}: ${{ $product->price }}</li>
            @endforeach
        </ul>
    </body>
</html>