<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Http\Requests\ProductImageRequest;
use CodeCommerce\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    
    public function delete($id)
    {
        $product = Product::find($id);
        foreach($product->images()->getResults() as $image) {
            $this->removeImage($image);
        }
        $product->delete();
        return redirect()->route('products');
    }
    
    public function images(Product $product)
    {
        return view('admin.products.images.index', compact('product'));
    }
    
    public function createImage(Product $product)
    {
        return view('admin.products.images.createImage', compact('product'));
    }
    
    public function storeImage(ProductImageRequest $request, Product $product, ProductImage $productImage)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        
        $image = $productImage::create(['product_id' => $product->id, 'extension' => $extension]);
        Storage::disk('s3')->put('uploads/' . $image->id . '.' . $extension, File::get($file), 'public');
        return redirect()->route('products_images', $product);
    }
    
    public function deleteImage(Product $product, $id)
    {
        $image = ProductImage::find($id);
        $this->removeImage($image);  
        return redirect()->route("products_images", [$product]);
    }
    
    private function removeImage(ProductImage $image)
    {
        $filename = 'uploads/' .$image->id.'.'.$image->extension;
        if(Storage::disk('s3')->exists($filename)) {
            Storage::disk('s3')->delete($filename);
            $image->delete();
        }
    }
}
