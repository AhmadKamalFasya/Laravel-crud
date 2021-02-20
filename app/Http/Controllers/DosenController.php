<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = [
            'nama_dosen' => 'Ashley Chamber',
            'alamat'     => 'Green Canyon, No.23, Whinchester'
        ];

        return view('v_dosen', $data);
    }
}
