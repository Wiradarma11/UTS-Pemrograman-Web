<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InfosepedaModel extends Model
{
    public function allData()
    {
        return DB::table('Infosepeda')->get();
    }

    public function detailData($id_Infosepeda)
    {
        return DB::table('Infosepeda')->where('id_Infosepeda', $id_Infosepeda)->first();
    }
    public function addData($data)
    {
        DB::table('Infosepeda')->insert($data);
    }
    
    public function editData($id_Infosepeda, $data)
    {
        DB::table('Infosepeda')
            ->where('id_Infosepeda', $id_Infosepeda)
            ->update($data);
    }

    public function deleteData ($id_Infosepeda)
    {
        DB::table ('Infosepeda')
            ->where('id_Infosepeda', $id_Infosepeda)
            ->delete();
    }

}
