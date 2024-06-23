<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::orderBy('created_at')->paginate(3); 
     
        return view('products/index', ["products" => $products]);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(SaveProductRequest $request)
    {   

        $product = Product::create($request->validated());
        return redirect()->route('products.show', $product)->with('status', 'Product created!');
    }

    public function show(Product $product)
    {
        // $product = Product::findOrFail($id);
        return view('products.show', ["product" => $product]);
    }
    public function edit(Product $product)
    {
        // $product = Product::findOrFail($id)
        
        return view('products.edit', ["product" => $product]);
    }

    public function update(SaveProductRequest $request, Product $product)
    {

        $product->update($request->validated());
        return redirect()->route('products.show', $product)->with('status', 'Product updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Product deleted!');
    }
}
