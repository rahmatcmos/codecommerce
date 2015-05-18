<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

class AdminProductsController extends Controller
{
    protected $product;
    
    public function __construct(Product $product) 
    {
        $this->middleware('guest');
        $this->product = $product;
    }
    
    public function index(Product $product = null)
    {
        if ($product->id) {
            return view('product_details', ['product' => $product]);
        }
        return view('products_list', ['products' => $this->product->all()]);
    }
    
    public function create(Request $request)
    {
        return dd($request);
    }
    
    public function update(Product $product)
    {
        return dd($product);
    }
    
    public function delete(Product $product)
    {
        return dd($product);
    }
}
