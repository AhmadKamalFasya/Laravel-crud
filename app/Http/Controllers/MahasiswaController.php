<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
        $this->DosenModel = new DosenModel();
    }
    public function index()
    {
        $data = [
            'mahasiswa' => $this->MahasiswaModel->allData()
        ];

        return view('v_mahasiswa', $data);
    }

    public function detail($mahasiswa_id)
    {
        $data = [
            'mahasiswa' => $this->MahasiswaModel->detailMahasiswa($mahasiswa_id),
            'dosen'     => $this->DosenModel->allData()
        ];
        return view('v_detailmahasiswa', $data);
    }
}
