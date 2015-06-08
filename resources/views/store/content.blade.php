<div class="col-sm-9 padding-right">
    
    <!-- features_items -->
    <div class="features_items">
        <h2 class="title text-center">Featured</h2>
        @include('store.partials.productsListing', ['products' => $featuredProducts])
    </div>
    <!-- END features_items -->

    
    <!-- recommended -->
    <div class="features_items">
        <h2 class="title text-center">Recommended</h2>
        @include('store.partials.productsListing', ['products' => $recommendedProducts])
    </div>
    <!--   END recommended -->
</div>