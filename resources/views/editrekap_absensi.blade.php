@extends('layout.v_template')
@section('title','Edit Rekap absensi')

@section('content')

<form action= "/rekap_absensi/update/{{ $rekap_absensi->id_rekap_absensi }}" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Rekap absensi</label>
                    <input name="id_rekap_absensi" class="form-control" value="{{ $rekap_absensi->id_rekap_absensi }}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>NIS</label>
                    <input name="nis_absen" class="form-control" value="{{ $rekap_absensi->nis_absen }}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
        
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_absen" class="form-control" value="{{$rekap_absensi->nama_absen}}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" class="form-control" value="{{ $rekap_absensi->keterangan }}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input name="kelas" class="form-control" value="{{ $rekap_absensi->kelas }}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" class="form-control" value="{{ $rekap_absensi->tanggal }}">
                    <div class="text-danger">
                        @error('id_rekap_absensi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </div>
    </div>

</form>


@endsection