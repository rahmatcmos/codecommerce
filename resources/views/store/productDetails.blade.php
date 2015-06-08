

<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">

            <div class="view-product">
                @if(count($product->images))
                <img src="{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $product->images->first()->id.'.'.$product->images->first()->extension) }}" alt=""/>
                @else
                <img src="{{ url('images/no-img.jpg') }}" alt="" />
                @endif

            </div>
            @if(count($product->images))
            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">

                            @foreach ($product->images as $image)
                            <a href="#"><img src="{{ Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getObjectUrl('projeto-laravel-code', 'uploads/' . $image->id.'.'.$image->extension) }}" alt="" width="80"></a>
                            @endforeach

                    </div>

                </div>

            </div>
            @endif
        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->

                <h2>{{ $product->category->name }} :: {{ $product->name }}</h2>

                <p>{{ $product->description  }}</p>
                <span>
                    <span>$ {{ $product->price  }}</span>
                        <a href="http://commerce.dev:10088/cart/2/add" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                </span>
                <p>
                    Tags:
                    @foreach($product->tags as $tag)
                        <a href="{{ route('products_by_tag', $tag)  }}"><span class="label label-primary">{{ $tag->name  }}</span></a>
                    @endforeach
                </p>
            </div>
            <!--/product-information-->
        </div>
    </div>
    <!--/product-details-->
</div>