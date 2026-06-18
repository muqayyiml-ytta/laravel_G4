<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'nama_produk' => 'Laptop Asus ROG',
            'harga' => 'Rp 25.000.000'
        ];
        
        return view('p3.produk', $data);
    }
}