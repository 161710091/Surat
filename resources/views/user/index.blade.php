@extends('layouts.admin')
@section('content')
@role('Super Admin')
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Users
            <div class="panel-title pull-right">
              <a href="{{route('user.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Hak Akses</th>
                  <th>Avatar</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($users as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->username }}</td>
                  <td>{{ $data->name }}</td>
                  <td>
                    @foreach($data->Role as $role)
                      {{ $role->name }}
                    @endforeach
                  </td>
                  <td>
                    <img src="{{ asset('/assets/img/avatar/'.$data->avatar.'') }}" class="img-circle elevation-2" width="50" height="50">
                  </td>
                  <td>
                    <a href="{{ route('user.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('user.destroy', $data->id) }}" method="post">
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
  @else
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Users
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Hak Akses</th>
                  <th>Avatar</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($users as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->username }}</td>
                  <td>{{ $data->name }}</td>
                  <td>
                    @foreach($data->Role as $role)
                      {{ $role->name }}
                    @endforeach
                  </td>
                  <td>
                    <img src="{{ asset('/assets/img/avatar/'.$data->avatar.'') }}" class="img-circle elevation-2" width="50" height="50">
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
  @endrole
@endsection