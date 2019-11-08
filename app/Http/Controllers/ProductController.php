<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('store.store',compact('products'));
    }
    private function pricart()
    {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        }
        else{
            $cart = null;
        }
        return $cart;
    }
    private function cart($product)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        }
        else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('cart',$cart);
    }
    public function addToCart(Product $product)
    {
        $this->cart($product);
        return redirect()->route('products.index')->with('success','Product was added');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function showCart()
    {
       $cart= $this->pricart();
        return view('cart.show',compact('cart'));
    }
}
