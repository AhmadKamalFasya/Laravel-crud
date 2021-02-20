<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'universitas' => 'Zeph University',
            'region'      => 'Bandung'
        ];
        return view('v_home', $data);
    }
}
