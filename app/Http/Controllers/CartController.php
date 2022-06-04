<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /*
    public function shop()
    {
        $products = Product::all();
        dd($products);
        return view('welcome')->withTitle('JESS Appliances | Shop')->with(['products' => $products]);
    }
    */

    public function cart()  {
        $userId = Auth::user()->id;
        $cartCollection = \Cart::session($userId)->getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('My Cart')->with(['cartCollection' => $cartCollection]);
    }

    public function add(Request$request){
        $userId = Auth::user()->id;
        \Cart::session($userId)->add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,

            )
        ));
        return redirect()->route('cart.index')->with('success', 'Product has been added to Cart!');
    }

    public function remove(Request $request){
        $userId = Auth::user()->id;
        \Cart::session($userId)->remove($request->id);
        return redirect()->route('cart.index')->with('success', 'Product successfully removed!');
    }

    public function update(Request $request){
        $userId = Auth::user()->id;
        \Cart::session($userId)->update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success', 'Your cart has been updated!');
    }

    public function clear(){
        $userId = Auth::user()->id;
        \Cart::session($userId)->clear();
        return redirect()->route('cart.index')->with('success', 'You just cleared your cart!');
    }

    public function checkout(){
        $userId = Auth::user()->id;
        $cartCollection = \Cart::session($userId)->getContent();
        return view('cart.checkout')->with(['cartCollection' => $cartCollection]);
    }

}