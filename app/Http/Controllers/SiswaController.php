<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        return view('siswa', $data);
    }

    public function detail($id_siswa)
    {
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData(($id_siswa)),
        ];
        return view('detailsiswa', $data);
    }

    public function add()
    {
        return view('addsiswa');
    }

    public function insert()
    {
        Request()->validate([
            'id_siswa' => 'required|unique:siswa,id_siswa|min:1|max:11',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'notlp' => 'required',
            'email_siswa' => 'required',
            'kelas' => 'required',
        ],[
            'id_siswa.required' => 'wajib di isi',
            'id_siswa.unique' => 'id_siswa sudah ada',
            'id_siswa.min' => 'Min 1 Karakter',
            'id_siswa.max' => 'Max 11 Karakter',
            'nis.required' => 'wajib di isi',
            'nama_siswa.required' => 'wajib di isi',
            'jenis_kelamin.required' => 'wajib di isi',
            'alamat.required' => 'wajib di isi',
            'ttl.required' => 'wajib di isi',
            'notlp.required' => 'wajib di isi',
            'email_siswa.required' => 'wajib di isi',
            'kelas.required' => 'wajib di isi',
        ]);
        $data =[
            'id_siswa' => Request()->id_siswa,
            'nis' => Request()->nis,
            'nama_siswa' => Request()->nama_siswa,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'ttl' => Request()->ttl,
            'notlp' => Request()->notlp,
            'email_siswa' => Request()->email_siswa,
            'kelas' => Request()->kelas,
            
        ];

        $this->SiswaModel->addData($data);
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_siswa)
    {
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData(($id_siswa)),
        ];
        return view('editsiswa', $data);
    }

    public function update($id_siswa)
    {
        Request()->validate([
            'id_siswa' => 'required|min:1|max:11',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'notlp' => 'required',
            'email_siswa' => 'required',
            'kelas' => 'required',
        ],[
            'id_siswa.required' => 'wajib di isi',
            'id_siswa.unique' => 'id_siswa sudah ada',
            'id_siswa.min' => 'Min 1 Karakter',
            'id_siswa.max' => 'Max 11 Karakter',
            'nis.required' => 'wajib di isi',
            'nama_siswa.required' => 'wajib di isi',
            'jenis_kelamin.required' => 'wajib di isi',
            'alamat.required' => 'wajib di isi',
            'ttl.required' => 'wajib di isi',
            'notlp.required' => 'wajib di isi',
            'email_siswa.required' => 'wajib di isi',
            'kelas.required' => 'wajib di isi',
        ]);
        $data =[
            'id_siswa' => Request()->id_siswa,
            'nis' => Request()->nis,
            'nama_siswa' => Request()->nama_siswa,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'ttl' => Request()->ttl,
            'notlp' => Request()->notlp,
            'email_siswa' => Request()->email_siswa,
            'kelas' => Request()->kelas,
            
        ];

        $this->SiswaModel->addData($data);
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function delete($id_siswa)
    {
        $this->SiswaModel->deleteData($id_siswa);
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di Hapus');
    }
}