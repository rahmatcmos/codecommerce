<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;

use CodeCommerce\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller 
{
    public function index()
    {
        $categories = Category::all();
        $featuredProducts = Product::featured()->take(3)->get();
        $recommendedProducts = Product::recommended()->take(3)->get();
        
        return view('store.index', compact('categories', 'featuredProducts', 'recommendedProducts'));
    }
    
    public function category(Category $category)
    {        
        $categories = Category::all();
        return view('store.category', compact('categories', 'category'));
    }

    public function product(Product $product)
    {
        $categories = Category::all();
        return view('store.product', compact('product', 'categories'));
    }

    public function tag($id)
    {
        $tag = Tag::find($id);
        $categories = Category::all();
        return view('store.tag', compact('categories','tag'));
    }
}
