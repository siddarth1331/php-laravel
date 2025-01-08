<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartManager extends Controller
{
    public function cart()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to access your cart.');
        }
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();
        return view('cart', compact('cartItems'));
    }
}
