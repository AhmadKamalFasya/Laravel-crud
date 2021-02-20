<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->DosenModel = new DosenModel();
    }
    public function index()
    {
        $data = [
            'dosen' => $this->DosenModel->allData(),
        ];

        return view('v_dosen', $data);
    }

    public function detail($dosen_id)
    {
        if (!$this->DosenModel->detailDosen($dosen_id)) {
            abort(404);
        }
        $data = [
            'dosen' => $this->DosenModel->detailDosen($dosen_id)
        ];

        return view('v_detaildosen', $data);
    }
}
