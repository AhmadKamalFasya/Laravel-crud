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
}
