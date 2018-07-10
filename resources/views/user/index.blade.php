@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Users
            <div class="panel-title pull-right">
              <a href="{{route('user.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
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
                      <img src="{{ asset('/assets/img/avatar/'.$data->avatar.'') }}" class="img-circle elevation-2" alt="User Image" width="50" height="50">
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
  </div>
@endsection