@foreach($products as $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    @if(count($product->images))
                        <img src="{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $product->images->first()->id.'.'.$product->images->first()->extension) }}" alt="" />
                    @else
                        <img src="{{ url('images/no-img.jpg') }}" alt="" />
                    @endif
                    <h2>$ {{ $product->price }}</h2>
                    <p>{{ $product->name }}</p>
                    <a href="{{ route('product_details', [$product])  }}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>

                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$ {{ $product->price }}</h2>
                        <p>{{ $product->name }}</p>
                        <a href="{{ route('product_details', [$product])  }}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>

                        <a href="cart/2/add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach