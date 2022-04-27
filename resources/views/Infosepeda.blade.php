@extends('layout.v_template')
@section('title','Info Sepeda')

@section('content')
    <a href="/Infosepeda/add" class="btn btn-primary btn-sm">Add</a> <br>
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
                <th class="bg-purple">Id Info Sepeda</th>
                <th class="bg-purple">Nama Penyewa</th>
                <th class="bg-purple" >Harga Sewa</th>
                <th class="bg-purple" >Merk</th>
                <th class="bg-purple" >Foto Sepeda</th>
                <th class="bg-purple" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($Infosepeda as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_penyewa }}</td>
                <td>{{ $data->harga_sewa }}</td>
                <td>{{ $data->merk }}</td>
                <td><img src="{{ url('foto_sepeda/'.$data->foto_sepeda) }}" width="100px"></td>
                <td>
                    <a href="/Infosepeda/detail/{{ $data->id_Infosepeda }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/Infosepeda/edit/{{ $data->id_Infosepeda }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_Infosepeda }}">
                Delete
              </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($Infosepeda as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_Infosepeda }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_penyewa}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini...?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/Infosepeda/delete/{{$data->id_Infosepeda}}" class="btn btn-outline">Yes</a>
              </div>
            </div>
@endforeach

@endsection