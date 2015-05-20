<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Category;

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
            return view('admin.products.details', compact('product'));
        }
        return view('admin.products.index', ['products' => $this->product->paginate(10)]);
    }
    
    public function create(Category $category)
    {
        $categories = $category->lists('name', 'id');
        return view('admin.products.create', compact('categories'));
    }
    
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $this->product->fill($data);
        $this->product->save();            
        return redirect()->route('products');
    }
    
    public function edit(Product $product, Category $category)
    {
        $categories = $category->lists('name', 'id');
        return view('admin.products.edit', compact('product', 'categories'));
    }
    
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products');
    }
    
    public function destroy(Product $product)
    {
        return view('admin.products.delete', compact('product'));
    }
    
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('products');
    }
}
