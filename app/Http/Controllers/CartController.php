<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        // dd(session()->all());
        // Retrieve cart items from session or database
        $cartItems = session('cart', []);
        
        // Calculate subtotal, shipping, and total
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = 45; // Assuming fixed shipping cost
        $total = $subtotal + $shipping;
        
        return view('cart', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');
    
        // Logic to remove the product from the cart
        // Retrieve cart items from session
        $cartItems = session('cart', []);
        
        // Filter out the product to be removed
        $cartItems = array_filter($cartItems, function($item) use ($productId) {
            return $item['id'] != $productId;
        });
    
        // Update the cart in the session
        session(['cart' => $cartItems]);
    
        // Return a response indicating success
        return response()->json(['message' => 'Product removed from cart'], 200);
    }



    public function addToCart(Request $request)
    {
        // Retrieve product details from the request
        $productId = $request->input('product_id');
        $product = Category::find($productId);
        
        // Add product to cart
        $cartItems = session('cart', []);
        $cartItems[] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1, // Assuming quantity is always 1 initially
            'image' => $product->imgpath,
        ];
        session(['cart' => $cartItems]);

        // Redirect to cart page
        return redirect()->route('cart');
    }
}