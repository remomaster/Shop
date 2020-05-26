<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Shoe;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request, Shoe $product){
        if(!session()->has('cart')){
            session(['cart' => collect()]);
        }
        session()->push('cart', $product);
        
        return back();
    }

    public function cart(){
        return view('shoppingCart.index', [
            'products' => session('cart'),
        ]);
    }
}
