<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('product.index', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('product.create');
    }

    public function detail()
    {

        return view('product.detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        $validatedData = $request->validate([
            'image_product' => 'image|file|max:1024',
            'author' => 'required',
            'date' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
        
        if ($request->file('image_product')) {
            $validatedData['image_product'] = $request->file('image_product')->store('post-images');
        }

        product::create($validatedData);


        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $product = product::get()->where('slug', $product->slug);
        return view('product-details', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $validatedData = $request->validate([
            'image_product' => 'image|file|max:1024',
            'author' => 'required',
            'date' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
        
        if ($request->file('image_product')) {
            $validatedData['image_product'] = $request->file('image_product')->store('post-images');
        }

        $product->update($validatedData);


        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
