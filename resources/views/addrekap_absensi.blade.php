@extends('layout.v_template')
@section('title','Add Rekap Absensi')

@section('content')

<form action="/rekap_absensi/insert" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Rekap Absensi</label>
                    <input name="id_rekap_absensi" class="form-control" value="{{ old('id_rekap_absensi') }}">
                    <div class="text-danger">
                        @error('id_guru')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>NIS</label>
                    <input name="nis_absen" class="form-control" value="{{ old('nis_absen') }}">
                    <div class="text-danger">
                        @error('nis_absen')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
        
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_absen" class="form-control" value="{{ old('nama_absen') }}">
                    <div class="text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>keterangan</label>
                    <select name="keterangan" class="form-control" required>
				<option value=>Pilih keterangan</option>
				<option value="Hadir">Hadir</option>
				<option value="Sakit">Sakit</option>
				<option value="Ijin">Ijin</option>
				<option value="Alpha">Alpha</option>
			</select>
                    <div class="text-danger">
                        @error('kelas')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input name="kelas" class="form-control" value="{{ old('kelas') }}">
                    <div class="text-danger">
                        @error('kelas')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                    <div class="text-danger">
                        @error('kelas')
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