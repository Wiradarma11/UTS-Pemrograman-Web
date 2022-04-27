@extends('layout.v_template')
@section('title','Detail Info Sepeda')
@section('content')

<table class="table">
    <tr>
        <th width="50px">Id Infosepeda</th>
        <th width="30px">:</th>
        <th>{{$Infosepeda->id_Infosepeda}}</th>
    </tr>
    <tr>
        <th width="50px">Nama Penyewa</th>
        <th width="30px">:</th>
        <th>{{$Infosepeda->nama_penyewa}}</th>
    </tr>
    <tr>
        <th width="50px">Harga Sewa</th>
        <th width="30px">:</th>
        <th>{{$Infosepeda->harga_sewa}}</th>
    </tr>
    <tr>
        <th width="50px">Merk</th>
        <th width="30px">:</th>
        <th>{{$Infosepeda->merk}}</th>
    </tr>
    <tr>
        <th width="50px">Foto Sepeda</th>
        <th width="30px">:</th>
        <th> <img src="{{asset('template')}}/dist/img/sepeda2.png" width="100px"></th>
    </tr>
    <tr>
            <a href="/Infosepeda" class="btn btn-success tbn-sm">Kembali</a>
    </tr>

</table>





@endsection