<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfosepedaModel;

class InfosepedaController extends Controller
{
    public function __construct()
    {
        $this->InfosepedaModel = new InfosepedaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'Infosepeda' => $this->InfosepedaModel->allData(),
        ];
        return view('Infosepeda', $data);
    }

    public function detail($id_Infosepeda)
    {
        if (!$this->InfosepedaModel->detailData($id_Infosepeda)) {
            abort(404);
        }
        $data = [
            'Infosepeda' => $this->InfosepedaModel->detailData(($id_Infosepeda)),
        ];
        return view('detailInfosepeda', $data);
    }

    public function add()
    {
        return view('addInfosepeda');
    }

    public function insert()
    {
        Request()->validate([
            'id_Infosepeda' => 'required|unique:Infosepeda,id_Infosepeda|min:1|max:11',
            'nama_penyewa' => 'required',
            'harga_sewa' => 'required',
            'merk' => 'required',
            'foto_sepeda' => 'required',
        ],[
            'id_Infosepeda.required' => 'wajib di isi',
            'id_Infosepeda.unique' => 'id_Infosepeda sudah ada',
            'id_Infosepeda.min' => 'Min 1 Karakter',
            'id_Infosepeda.max' => 'Max 11 Karakter',
            'nama_penyewa.required' => 'wajib di isi',
            'harga_sewa.required' => 'wajib di isi',
            'merk.required' => 'wajib di isi',
            'foto_sepeda.required' => 'wajib di isi',
        ]);
        $data =[
            'id_Infosepeda' => Request()->id_Infosepeda,
            'nama_penyewa' => Request()->nama_penyewa,
            'harga_sewa' => Request()->harga_sewa,
            'merk' => Request()->merk,
            'foto_sepeda' => Request()->foto_sepeda,
        ];

        $this->InfosepedaModel->addData($data);
        return redirect()->route('Infosepeda')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_Infosepeda)
    {
        if (!$this->InfosepedaModel->detailData($id_Infosepeda)) {
            abort(404);
        }
        $data = [
            'Infosepeda' => $this->InfosepedaModel->detailData(($id_Infosepeda)),
        ];
        return view('editInfosepeda', $data);
    }

    public function update($id_Infosepeda)
    {
        Request()->validate([
            'id_Infosepeda' => 'required|unique:Infosepeda,id_Infosepeda|min:1|max:11',
            'nama_penyewa' => 'required',
            'harga_sewa' => 'required',
            'merk' => 'required',
            'foto_sepeda' => 'required',
        ],[
            'id_Infosepeda.required' => 'wajib di isi',
            'id_Infosepeda.unique' => 'id_Infosepeda sudah ada',
            'id_Infosepeda.min' => 'Min 1 Karakter',
            'id_Infosepeda.max' => 'Max 11 Karakter',
            'nama_penyewa.required' => 'wajib di isi',
            'harga_sewa.required' => 'wajib di isi',
            'merk.required' => 'wajib di isi',
            'foto_sepeda.required' => 'wajib di isi',
        ]);
        $data =[
            'id_Infosepeda' => Request()->id_Infosepeda,
            'nama_penyewa' => Request()->nama_penyewa,
            'harga_sewa' => Request()->harga_sewa,
            'merk' => Request()->merk,
            'foto_sepeda' => Request()->foto_sepeda,
        ];

        $this->InfosepedaModel->editData($id_Infosepeda, $data);
        return redirect()->route('Infosepeda')->with('pesan','Data Berhasil Di update');
    }

    public function delete($id_Infosepeda)
    {
        $this->InfosepedaModel->deleteData($id_Infosepeda);
        return redirect()->route('Infosepeda')->with('pesan','Data Berhasil Di Hapus');
    }
}