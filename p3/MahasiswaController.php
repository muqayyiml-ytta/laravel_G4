<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Budi Santoso',
            'jurusan' => 'Teknik Informatika'
        ];
        
        return view('p3.mahasiswa', $data);
    }
}