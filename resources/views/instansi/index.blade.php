@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Instansi
            <div class="panel-title pull-right">
              <a href="{{route('instansi.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Instansi</th>
                    <th>Kabupaten/Kota</th>
                    <th>Telepon</th>
                    <th>E-mail</th>
                    <th>Alamat</th>
                    <th>Kepala</th>
                    <th>NIP Kepala</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($ins as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_instansi }}</td>
                    <td>{{ $data->kab_kota }}</td>
                    <td>0{{ $data->telp }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->kepala }}</td>
                    <td>{{ $data->nip_kepala }}</td>
                    <td>
                      <a href="{{ route('instansi.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                    </td>
                    <td>
                      <form action="{{ route('instansi.destroy', $data->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection