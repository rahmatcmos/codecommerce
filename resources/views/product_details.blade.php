<!DOCTYPE html>
<html>
    <head>
        <title>Code Commerce - Product</title>
    </head>
    <body>
        <h1>Product {{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>$ {{ $product->price }}</p>
        <a href="{{ route('products') }}">< Voltar</a>
    </body>
</html>