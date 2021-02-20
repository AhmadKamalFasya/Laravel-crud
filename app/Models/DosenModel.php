<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    public function allData()
    {
        return [
            [
                'nidn' => '536251423',
                'nama' => 'Gerrard Anderson',
                'mata_kuliah' => 'Pemrograman Web'
            ],
            [
                'nidn' => '536252211',
                'nama' => 'Hill Calmington',
                'mata_kuliah' => 'Blender'
            ],
            [
                'nidn' => '536884151',
                'nama' => 'Herly Mattsone',
                'mata_kuliah' => 'Android'
            ]
        ];
    }
}
