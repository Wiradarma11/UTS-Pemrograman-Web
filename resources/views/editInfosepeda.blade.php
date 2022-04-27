@extends('layout.v_template')
@section('title','Edit Info Sepeda')

@section('content')

<form action= "/Infosepeda/update/{{ $Infosepeda->id_Infosepeda }}" method="POST" enctype="multiparty/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id Infosepeda</label>
                    <input name="id_Infosepeda" class="form-control" value="{{ $Infosepeda->id_Infosepeda }}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama_Penyewa</label>
                    <input name="nama_penyewa" class="form-control" value="{{ $Infosepeda->nama_penyewa }}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
      
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input name="harga_sewa" class="form-control" value="{{ $Infosepeda->harga_sewa }}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Merk</label>
                    <input name="merk" class="form-control" value="{{ $Infosepeda->merk}}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Foto Sepeda</label>
                    <input name="foto_sepeda" class="form-control" value="{{ $Infosepeda->foto_sepeda }}">
                    <div class="text-danger">
                        @error('id_Infosepeda')
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