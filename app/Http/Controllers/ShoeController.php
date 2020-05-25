<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.all', [
            'products' => Shoe::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schuhe  $schuhe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $product)
    {
        return view('shop.detail', [
            'product' => $product,
        ]);
    }
}
