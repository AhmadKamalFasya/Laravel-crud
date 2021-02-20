<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DosenModel extends Model
{
    public function allData()
    {
        return $users = DB::table('dosen')->get();
    }

    public function detailDosen($dosen_id)
    {
        return DB::table('dosen')->where('dosen_id', $dosen_id)->first();
    }

    public function addDosen($data)
    {
        DB::table('dosen')->insert($data);
    }

    public function editDosen($dosen_id, $data)
    {
        DB::table('dosen')->where('dosen_id', $dosen_id)->update($data);
    }

    public function deleteDosen($dosen_id)
    {
        DB::table('dosen')->where('dosen_id', $dosen_id)->delete();
    }
}
