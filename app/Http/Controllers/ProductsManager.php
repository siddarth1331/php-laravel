<?php
namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\Product;
class ProductsManager extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('details', compact('product'));
    }

    public function addToCart($id)
    {
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;

        if ($cart->save()) {
            return redirect()->back()->with('success', 'Product added to cart');
        } else {
            return redirect()->back()->with('error', 'Failed to add project to cart');
        }

    }
}