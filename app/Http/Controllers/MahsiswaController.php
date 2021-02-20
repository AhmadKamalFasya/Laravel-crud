<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahsiswaController extends Controller
{

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $data = [
            'mahasiswa' => $this->MahasiswaModel->allData()
        ];

        return view('v_mahasiswa', $data);
    }
}
