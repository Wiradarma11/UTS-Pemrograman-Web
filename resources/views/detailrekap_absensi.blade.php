@extends('layout.v_template')
@section('title','Detail Rekap Absensi')
@section('content')

<table class="table">
    <tr>
        <th width="50px">Id rekap absensi</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->id_rekap_absensi}}</th>
    </tr>
    <tr>
        <th width="50px">NIS</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->nis_absen}}</th>
    </tr>
    <tr>
        <th width="50px">Nama</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->nama_absen}}</th>
    </tr>
    <tr>
        <th width="50px">Keterangan</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->keterangan}}</th>
    </tr>
    <tr>
        <th width="50px">Kelas</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->kelas}}</th>
    </tr>
    <tr>
        <th width="50px">tanggal</th>
        <th width="30px">:</th>
        <th>{{$rekap_absensi->tanggal}}</th>
    </tr>
    <tr>
            <a href="/rekap_absensi" class="btn btn-success tbn-sm">Kembali</a>
    </tr>

</table>





@endsection