<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekap_absensiModel;

class Rekap_absensiController extends Controller
{
    public function __construct()
    {
        $this->Rekap_absensiModel = new Rekap_absensiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'rekap_absensi' => $this->Rekap_absensiModel->allData(),
        ];
        return view('rekap_absensi', $data);
    }

    public function detail($id_rekap_absensi)
    {
        if (!$this->Rekap_absensiModel->detailData($id_rekap_absensi)) {
            abort(404);
        }
        $data = [
            'rekap_absensi' => $this->Rekap_absensiModel->detailData(($id_rekap_absensi)),
        ];
        return view('detailrekap_absensi', $data);
    }

    public function add()
    {
        return view('addrekap_absensi');
    }

    public function insert()
    {
        Request()->validate([
            'id_rekap_absensi' => 'required|unique:rekap_absensi,id_rekap_absensi|min:1|max:11',
            'nis_absen' => 'required',
            'nama_absen' => 'required',
            'keterangan' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
        ],[
            'id_rekap_absensi.required' => 'wajib di isi',
            'id_rekap_absensi.unique' => 'id_rekap_absensi sudah ada',
            'id_rekap_absensi.min' => 'Min 1 Karakter',
            'id_rekap_absensi.max' => 'Max 11 Karakter',
            'nis_absen.required' => 'wajib di isi',
            'nama_absen.required' => 'wajib di isi',
            'keterangan.required' => 'wajib di isi',
            'kelas.required' => 'wajib di isi',
            'tanggal.required' => 'wajib di isi',
        ]);
        $data =[
            'id_rekap_absensi' => Request()->id_rekap_absensi,
            'nis_absen' => Request()->nis_absen,
            'nama_absen' => Request()->nama_absen,
            'keterangan' => Request()->keterangan,
            'kelas' => Request()->kelas,
            'tanggal' => Request()->tanggal,
        ];

        $this->Rekap_absensiModel->addData($data);
        return redirect()->route('rekap_absensi')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_rekap_absensi)
    {
        if (!$this->Rekap_absensiModel->detailData($id_rekap_absensi)) {
            abort(404);
        }
        $data = [
            'rekap_absensi' => $this->Rekap_absensiModel->detailData(($id_rekap_absensi)),
        ];
        return view('editrekap_absensi', $data);
    }

    public function update($id_rekap_absensi)
    {
        Request()->validate([
            'id_rekap_absensi' => 'required|min:1|max:11',
            'nis_absen' => 'required',
            'nama_absen' => 'required',
            'keterangan' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
        ],[
            'id_rekap_absensi.required' => 'wajib di isi',
            'id_rekap_absensi.unique' => 'id_rekap_absensi sudah ada',
            'id_rekap_absensi.min' => 'Min 1 Karakter',
            'id_rekap_absensi.max' => 'Max 11 Karakter',
            'nis_absen.required' => 'wajib di isi',
            'nama_absen.required' => 'wajib di isi',
            'keterangan.required' => 'wajib di isi',
            'kelas.required' => 'wajib di isi',
            'tanggal.required' => 'wajib di isi',
        ]);
        $data =[
            'id_rekap_absensi' => Request()->id_rekap_absensi,
            'nis_absen' => Request()->nis_absen,
            'nama_absen' => Request()->nama_absen,
            'keterangan' => Request()->keterangan,
            'kelas' => Request()->kelas,
            'tanggal' => Request()->tanggal,
        ];

        $this->Rekap_absensiModel->addData($data);
        return redirect()->route('rekap_absensi')->with('pesan','Data Berhasil Di Edit');
    }
  

    public function delete($id_rekap_absensi)
    {
        $this->Rekap_absensiModel->deleteData($id_rekap_absensi);
        return redirect()->route('rekap_absensi')->with('pesan','Data Berhasil Di Hapus');
    }
}