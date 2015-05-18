<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    protected $category;
    
    public function __construct(Category $category) 
    {
        $this->middleware('guest');
        $this->category = $category;
    }
    
    public function index(Category $category = null)
    {
        if ($category->id) {
            return view('category_details', ['category' => $category]);
        }
        return view('categories_list', ['categories' => $this->category->all()]);
    }
    
    public function create(Request $request)
    {
        return dd($request);
    }
    
    public function update(Category $category)
    {
        return dd($category);
    }
    
    public function delete(Category $category)
    {
        return dd($category);
    }
}
