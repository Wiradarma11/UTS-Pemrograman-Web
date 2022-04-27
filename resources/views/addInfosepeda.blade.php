@extends('layout.v_template')
@section('title','Add Info Sepeda')

@section('content')

<form action="/Infosepeda/insert" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Infosepeda</label>
                    <input name="id_Infosepeda" class="form-control" value="{{ old('id_Infosepeda') }}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Penyewa</label>
                    <input name="nama_penyewa" class="form-control" value="{{ old('nip') }}">
                    <div class="text-danger">
                        @error('nama_penyewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                    <div class="text-danger">
                        @error('harga_sewa')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Merk</label>
                    <input name="merk" class="form-control" value="{{ old('merk') }}">
                    <div class="text-danger">
                        @error('merk')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Sepeda</label>
                    <input name="foto_sepeda" class="form-control" value="{{ old('foto_sepeda') }}">
                    <div class="text-danger">
                        @error('foto_sepeda')
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