@extends('layouts.admin')

@section('content')
  <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  {{ $sm }}
                </h3>

                <p>Surat Masuk</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="{{ route('surat_masuk.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!--  ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $sk }}</h3>

                <p>Surat Keluar</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope-open"></i>
              </div>
              <a href="{{ route('surat_keluar.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $dis }}</h3>

                <p>Disposisi</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <a href="{{ route('disposisi.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $user }}</h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="{{ route('user.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
