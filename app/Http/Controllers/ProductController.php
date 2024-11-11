<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
    return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request) 
    {
        Product::create($request->validated());

        return redirect()->route('products.index')
                         ->with('success', 'Продукт успішно створений.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated()); 

        return redirect()->route('products.index')
                         ->with('success', 'Продукт успішно оновлено.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index')
                     ->with('success', 'Продукт успішно видалено.');
}
}
