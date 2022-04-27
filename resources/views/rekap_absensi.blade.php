@extends('layout.v_template')
@section('title','Rekap Absensi')

@section('content')
    <a href="/rekap_absensi/add" class="btn btn-primary btn-sm">Add</a> <br>
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> success!</h4>
                {{ session('pesan') }}.
            </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-purple" >id rekap absensi</th>
                <th class="bg-purple" >NIS</th>
                <th class="bg-purple" >Nama</th>
                <th class="bg-purple" >keterangan</th>
                <th class="bg-purple" >kelas</th>
                <th class="bg-purple" >tanggal</th>
                <th class="bg-purple" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($rekap_absensi as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nis_absen }}</td>
                <td>{{ $data->nama_absen }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->tanggal }}</td>
                <td>
                    <a href="/rekap_absensi/detail/{{ $data->id_rekap_absensi }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/rekap_absensi/edit/{{ $data->id_rekap_absensi }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_rekap_absensi }}">
                Delete
              </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($rekap_absensi as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_rekap_absensi }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_absen}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini...?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/rekap_absensi/delete/{{$data->id_rekap_absensi}}" class="btn btn-outline">Yes</a>
              </div>
            </div>
@endforeach

@endsection