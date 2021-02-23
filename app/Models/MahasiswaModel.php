<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class MahasiswaModel extends Model
{
    public function allData()
    {
        return DB::table('mahasiswa')
            ->leftJoin('prodi', 'prodi.prodi_id', '=', 'mahasiswa.prodi_id')
            ->leftJoin('matakuliah', 'matakuliah.matakuliah_id', '=', 'mahasiswa.matakuliah_id')
            ->get();
    }

    public function detailMahasiswa($mahasiswa_id)
    {
        return DB::table('mahasiswa')->where('mahasiswa_id', $mahasiswa_id)->first();
    }

    public function addMahasiswa($data)
    {
        DB::table('mahasiswa')->insert($data);
    }

    public function editMahasiswa($mahasiswa_id, $data)
    {
        return DB::table('mahasiswa')->where('mahasiswa_id', $mahasiswa_id)->update($data);
    }

    public function deleteMahasiswa($mahasiswa_id)
    {
        return DB::table('mahasiswa')->where('mahasiswa_id', $mahasiswa_id)->delete();
    }
}
