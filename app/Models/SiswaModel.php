<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function allData()
    {
        return DB::table('siswa')->get();
    }

    public function detailData($id_siswa)
    {
        return DB::table('siswa')->where('id_siswa', $id_siswa)->first();
    }
    public function addData($data)
    {
        DB::table('siswa')->insert($data);
    }
    public function editData($id_siswa, $data)
    {
        DB::table('siswa')
            ->where('id_siswa', $id_siswa)
            ->update($data);
    }


    public function deleteData ($id_siswa)
    {
        DB::table ('siswa')
            ->where('id_siswa', $id_siswa)
            ->delete();
    }
}
