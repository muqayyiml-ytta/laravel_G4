<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'John Doe',
            'kelas' => '12 RPL 1'
        ];
        
        return view('p3.profil', $data);
    }
}