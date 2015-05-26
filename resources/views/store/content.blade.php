<div class="col-sm-9 padding-right">
    
    <!-- features_items -->
    <div class="features_items">
        <h2 class="title text-center">Featured</h2>

        @foreach($featuredProducts as $featured)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        @if(count($featured->images)) 
                        <img src="{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $featured->images->first()->id.'.'.$featured->images->first()->extension) }}" alt="" />
                        @else
                        <img src="{{ url('images/no-img.jpg') }}" alt="" />
                        @endif
                        <h2>$ {{ $featured->price }}</h2>
                        <p>{{ $featured->name }}</p>
                        <a href="product/2" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>

                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$ {{ $featured->price }}</h2>
                            <p>{{ $featured->name }}</p>
                            <a href="product/2" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>

                            <a href="cart/2/add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach    
    </div>
    <!-- END features_items -->

    
    <!-- recommended -->
    <div class="features_items">
        <h2 class="title text-center">Recommended</h2>
        @foreach($recommendedProducts as $recommended)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        @if(count($recommended->images)) 
                        <img src="{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $recommended->images->first()->id.'.'.$recommended->images->first()->extension) }}" alt="" />
                        @else
                        <img src="{{ url('images/no-img.jpg') }}" alt="" />
                        @endif
                        <h2>$ {{ $recommended->price }}</h2>
                        <p>{{ $recommended->name }}</p>
                        <a href="product/4" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$ {{ $recommended->price }}</h2>
                            <p>{{ $recommended->name }}</p>
                            <a href="product/4" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>More</a>
                            <a href="cart/4/add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach   
    </div>
    <!--   END recommended -->
</div>