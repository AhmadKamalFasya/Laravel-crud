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

    public function add()
    {
        return view('v_adddosen');
    }

    public function insert()
    {
        Request()->validate(
            [
                'nidn' => 'required|unique:dosen|min:4|max:9',
                'nama' => 'required',
                'mata_kuliah' => 'required',
                'foto' => 'required|mimes:jpg,bmp,png',
            ],
            [
                'nidn.required' => 'NIDN harus diisi.',
                'nidn.unique' => 'NIDN telah terdaftar.',
                'nidn.min' => 'NIDN yang anda masukan kurang dari 4 karakter',
                'nidn.max' => 'NIDN yang anda masukan lebih dari 9 karakter',
                'nama.required' => 'Nama harus diisi.',
                'mata_kuliah.required' => 'Matakuliah harus diisi.',
                'foto.required' => 'Foto harus diisi.',
                'foto.mimes' => 'Extension file haru jpg,bmp,png'
            ]
        );

        // Jika validasi tidak ada maka data akan disimpan

        // ambil foto
        $file = Request()->foto;
        $fileName = Request()->nidn . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            'nidn' => Request()->nidn,
            'nama' => Request()->nama,
            'mata_kuliah' => Request()->mata_kuliah,
            'foto' => $fileName
        ];

        $this->DosenModel->addDosen($data);
        return redirect()->route('dosen')->with('pesan', 'Data berhasil ditambahkan');
    }
}
