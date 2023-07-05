<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Room::all();
        return view('frontend.flatc', compact('products'));
    }
    public function cart()
    {
        return view('frontend.details.a_detail');
    }
    public function bcart()
    {
        return view('frontend.details.b_detail');
    }
    public function ccart()
    {
        return view('frontend.details.c_detail');
    }
    public function dcart()
    {
        return view('frontend.details.d_detail');
    }
   
  
  
    // public function addToCart($id)
    // {
    //     $product = Room::findOrFail($id);
          
    //     $cart = session()->get('cart', []);
  
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => 1,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }
          
    //     session()->put('cart', $cart);
    //     // return redirect()->route('room')->with('success', ' Added to cartSuccessfully!');
    //     return redirect()->back()->with('success', 'Added to cart successfully!');
    // }
  

    // public function updateCart(Request $request)
    // {
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Product added to cart.');
    //     }
    // }
  
    // public function deleteProduct(Request $request)
    // {
    //     if($request->id) {
    //         $cart = session()->get('cart');
    //         if(isset($cart[$request->id])) {
    //             unset($cart[$request->id]);
    //             session()->put('cart', $cart);
    //         }
    //         session()->flash('success', 'Product successfully deleted.');
    //     }
    // }
}
