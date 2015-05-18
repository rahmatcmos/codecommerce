<!DOCTYPE html>
<html>
    <head>
        <title>Code Commerce - Products</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            @foreach($products as $product)
            <li><a href="{{ route('products', array($product->id)) }}">{{ $product->name }}</a>: $ {{ $product->price }}</li>
            @endforeach
        </ul>
    </body>
</html>