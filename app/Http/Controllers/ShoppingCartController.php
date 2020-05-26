<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Shoe;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request, Shoe $product){
        if($product->count < 1) return back(); // kein Produkt mehr auf Lager

        if(!session()->has('cart')){
            session(['cart' => collect()]);
        }
        session()->push('cart', $product);
        $product->count--;
        $product->save();
        
        return back();
    }

    public function cart(){
        if(!session()->has('cart')){
            session(['cart' => collect()]);
        }
        $val = 0;
        foreach(session('cart') as $product) $val += $product->price;

        return view('shoppingCart.index', [
            'products' => session('cart'),
            'total' => $val,
        ]);
    }

    public function buy(){
        session(['cart' => collect()]);
        return back();
    }
}
