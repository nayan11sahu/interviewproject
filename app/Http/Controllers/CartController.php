<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Display the shopping cart
    public function index()
    {
        $cart = session()->get('cart', []);
        $products = Product::whereIn('id', array_keys($cart))->get();
        return view('cart.index', compact('products'));
    }

    // Add an item to the cart
    public function add($productId)
    {
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$productId])) {
            $cart[$productId]++;
        } else {
            $cart[$productId] = 1;
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    // Remove an item from the cart
    public function remove($productId)
    {
        $cart = session()->get('cart', []);

        // Remove the item from the cart
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
}

