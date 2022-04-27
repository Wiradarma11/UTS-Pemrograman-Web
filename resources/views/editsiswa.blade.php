@extends('layout.v_template')
@section('title','Edit Siswa')

@section('content')

<form action= "/siswa/update/{{ $siswa->id_siswa }}" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Siswa</label>
                    <input name="id_siswa" class="form-control" value="{{ $siswa->id_siswa }}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>NIS</label>
                    <input name="nis" class="form-control" value="{{ $siswa->nis }}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
        
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input name="nama_siswa" class="form-control" value="{{$siswa->nama_siswa}}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input name="jenis_kelamin" class="form-control" value="{{$siswa->jenis_kelamin}}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{$siswa->alamat}}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Tempat tanggal lahir</label>
                    <input name="ttl" class="form-control" value="{{$siswa->ttl}}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No telepon</label>
                    <input name="notlp" class="form-control" value="{{$siswa->notlp}}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>e-mail</label>
                    <input name="email_siswa" class="form-control" value="{{ $siswa->email_siswa }}">
                    <div class="text-danger">
                        @error('id_siswa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input name="kelas" class="form-control" value="{{ $siswa->kelas }}">
                    <div class="text-danger">
                        @error('id_siswa')
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