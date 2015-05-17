<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    protected $category;
    
    public function __construct(Category $category) 
    {
        $this->middleware('guest');
        $this->category = $category;
    }
    
    public function index()
    {
        return view('categories', ['categories' => $this->category->all()]);
    }
}
