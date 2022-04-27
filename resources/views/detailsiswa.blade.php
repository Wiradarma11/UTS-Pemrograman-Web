@extends('layout.v_template')
@section('title','Detail Siswa')
@section('content')

<table class="table">
    <tr>
        <th width="50px">Id Siswa</th>
        <th width="30px">:</th>
        <th>{{$siswa->id_siswa}}</th>
    </tr>
    <tr>
        <th width="50px">NIS</th>
        <th width="30px">:</th>
        <th>{{$siswa->nis}}</th>
    </tr>
    <tr>
        <th width="50px">Nama Siswa</th>
        <th width="30px">:</th>
        <th>{{$siswa->nama_siswa}}</th>
    </tr>
    <tr>
        <th width="50px">Jenis Kelamin</th>
        <th width="30px">:</th>
        <th>{{$siswa->jenis_kelamin}}</th>
    </tr>
    <tr>
        <th width="50px">Alamat</th>
        <th width="30px">:</th>
        <th>{{$siswa->alamat}}</th>
    </tr>
    <tr>
        <th width="50px">Tempat Tanggal Lahir</th>
        <th width="30px">:</th>
        <th>{{$siswa->ttl}}</th>
    </tr>
    <tr>
        <th width="50px">No Telepon</th>
        <th width="30px">:</th>
        <th>{{$siswa->notlp}}</th>
    </tr>
    <tr>
        <th width="50px">E-mail</th>
        <th width="30px">:</th>
        <th>{{$siswa->email_siswa}}</th>
    </tr>
    <tr>
        <th width="50px">Kelas</th>
        <th width="30px">:</th>
        <th>{{$siswa->kelas}}</th>
    </tr>
    <tr>
            <a href="/siswa" class="btn btn-success tbn-sm">Kembali</a>
    </tr>

</table>





@endsection