@extends('layout.v_template')
@section('title','SISWA')

@section('content')
    <a href="/siswa/add" class="btn btn-primary btn-sm">Add</a> <br>
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
                <th class="bg-purple" >Id Siswa</th>
                <th class="bg-purple" >NIS</th>
                <th class="bg-purple" >Nama</th>
                <th class="bg-purple" >Jenis Kelamin</th>
                <th class="bg-purple" >Alamat</th>
                <th class="bg-purple" >Tempat Tanggal Lahir</th>
                <th class="bg-purple" >No Telepon</th>
                <th class="bg-purple" >E-mail</th>
                <th class="bg-purple" >Kelas</th>
                <th class="bg-purple" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($siswa as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->ttl }}</td>
                <td>{{ $data->notlp }}</td>
                <td>{{ $data->email_siswa }}</td>
                <td>{{ $data->kelas }}</td>
                <td>
                    <a href="/siswa/detail/{{ $data->id_siswa }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/siswa/edit/{{ $data->id_siswa }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_siswa }}">
                Delete
              </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($siswa as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_siswa }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_siswa}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini...?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/siswa/delete/{{$data->id_siswa}}" class="btn btn-outline">Yes</a>
              </div>
            </div>
@endforeach


@endsection