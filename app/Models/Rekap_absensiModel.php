<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rekap_absensiModel extends Model
{
    public function allData()
    {
        return DB::table('rekap_absensi')->get();
    }

    public function detailData($id_rekap_absensi)
    {
        return DB::table('rekap_absensi')->where('id_rekap_absensi', $id_rekap_absensi)->first();
    }
    public function addData($data)
    {
        DB::table('rekap_absensi')->insert($data);
    }
    public function editData($id_rekap_absensi, $data)
    {
        DB::table('rekap_absensi')
            ->where('id_rekap_absensi', $id_rekap_absensi)
            ->update($data);
    }
    public function deleteData ($id_rekap_absensi)
    {
        DB::table ('rekap_absensi')
            ->where('id_rekap_absensi', $id_rekap_absensi)
            ->delete();
    }
}
