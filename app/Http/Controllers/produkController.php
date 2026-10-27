<?php

namespace App\Http\Controllers;

class produkController extends Controller
{
    public function index()
    {
        $produk = 'Botol Minum 1000ml';

        return view('produk/index', compact('produk'));
    }
}
