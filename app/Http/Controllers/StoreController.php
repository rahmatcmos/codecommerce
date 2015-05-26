<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;

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
}
