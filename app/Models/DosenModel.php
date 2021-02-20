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
}
