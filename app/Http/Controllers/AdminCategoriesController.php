<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests\CategoryRequest;
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
            return view('admin.categories.details', compact('category'));
        }
        return view('admin.categories.index', ['categories' => $this->category->paginate(5)]);
    }
    
    public function create()
    {
        return view('admin.categories.create');
    }
    
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
            $category = $this->category->fill($data);
            $category->save();            
            return redirect()->route('categories');
    }
    
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }
    
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories');
    }
    
    public function destroy(Category $category)
    {
        return view('admin.categories.delete', compact('category'));
    }
    
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('categories');
    }
}
