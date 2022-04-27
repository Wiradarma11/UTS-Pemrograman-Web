@extends('layout.v_template')
@section('title','Add Siswa')

@section('content')

<form action="/siswa/insert" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Siswa</label>
                    <input name="id_siswa" class="form-control" value="{{ old('id_siswa') }}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>NIS</label>
                    <input name="nis" class="form-control" value="{{ old('nis') }}">
                    <div class="text-danger">
                        @error('nis')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}">
                    <div class="text-danger">
                        @error('nama_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                    <div class="text-danger">
                        @error('jenis_kelamin')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                    <div class="text-danger">
                        @error('alamat')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input name="ttl" class="form-control" value="{{ old('ttl') }}">
                    <div class="text-danger">
                        @error('ttl')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input name="notlp" class="form-control" value="{{ old('notlp') }}">
                    <div class="text-danger">
                        @error('notpl')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input name="email_siswa" class="form-control" value="{{ old('email_siswa') }}">
                    <div class="text-danger">
                        @error('email')
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
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>

        </div>
    </div>

</form>


@endsection