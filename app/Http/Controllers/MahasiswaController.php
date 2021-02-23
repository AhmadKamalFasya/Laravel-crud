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

    public function add()
    {
        return view('v_addmahasiswa');
    }

    public function insert()
    {
        Request()->validate(
            [
                'nim'           => 'required|unique:mahasiswa|min:9|max:9',
                'nama'          => 'required',
                'prodi_id'      => 'required',
                'matakuliah_id' => 'required'
            ],
            [
                'nim.required' => 'NIM harus diisi.',
                'nim_unique'   => 'NIM telah terdaftar',
                'nim.min' => 'NIM yang anda masukan kurang dari 6 karakter',
                'nim.max' => 'NIM yang anda masukan lebih dari 6 karakter',
                'nama.required' => 'Nama harus diisi.',
                'prodi_id' => 'Prodi ID harus diisi.',
                'matakuliah_id.required' => 'Matakuliah ID harus diisi.'
            ]
        );

        $data = [
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'prodi_id' => Request()->prodi_id,
            'matakuliah_id' => Request()->matakuliah_id
        ];

        $this->MahasiswaModel->addMahasiswa($data);

        return redirect()->route('mahasiswa')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($mahasiswa_id)
    {
        if (!$this->MahasiswaModel->detailMahasiswa($mahasiswa_id)) {
            abort(404);
        }

        $data = [
            'mahasiswa' => $this->MahasiswaModel->detailMahasiswa($mahasiswa_id)
        ];
        return view('v_editmahasiswa', $data);
    }

    public function update($mahasiswa_id)
    {

        $data = [
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'prodi_id' => Request()->prodi_id,
            'matakuliah_id' => Request()->matakuliah_id
        ];

        $this->MahasiswaModel->editMahasiswa($mahasiswa_id, $data);

        return redirect()->route('mahasiswa')->with('pesan', 'Data berhasil diupdate');
    }

    public function delete($mahasiswa_id)
    {
        $this->MahasiswaModel->deleteMahasiswa($mahasiswa_id);
        return redirect()->route('mahasiswa')->with('pesan', 'Data berhasil dihapus');
    }
}
