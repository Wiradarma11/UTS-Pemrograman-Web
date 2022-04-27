@extends('layout.v_template')
@section('title', 'DAFTAR PANEN')
    <div calss="shadow p-5 py-4 bg-white rounded sm:px-1 sm:py-1">
    <h1>{{$title}}</h1>
    <!--table data-->
    <table>
        <thead>
            <tr>
                <td>
                    Nama Produk
                </td>
                <td>Kelompok Tani</td>
                <td>Aksi</td>
            </tr>
        </thead>
    <!--table body-->
        <tbody>
            @foreach ($panens as $item)
                <tr>
                    <td>Nama Produk</td>
                    <td>Kelompok Tani</td>
                    <td>Aksi</td>
                </tr>
            @endforeach
        <t/body>
        <!--paginasi-->
    </table>

</div>
@endsection