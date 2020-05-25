<?php

namespace App\Http\Controllers;

use App\Schuhe;
use Illuminate\Http\Request;

class SchuheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.all', [
            'products' => Schuhe::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schuhe  $schuhe
     * @return \Illuminate\Http\Response
     */
    public function show(Schuhe $product)
    {
        return view('shop.detail', [
            'product' => $product,
        ]);
    }
}
