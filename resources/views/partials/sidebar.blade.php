<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Arsip Surat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if (Auth::user()->avatar==null)
          <img src="{{ asset('assets/dist/img/images.png') }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{ asset('assets/img/avatar/'.Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @role('Super Admin')
          <li class="nav-item">
            <a href="/home" class="nav-link ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('surat_masuk.index') }}" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('surat_keluar.index') }}" class="nav-link">
              <i class="nav-icon fa fa-envelope-open-o"></i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('disposisi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-file-o"></i>
              <p>
                Disposisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('instansi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-building-o"></i>
              <p>
                Instansi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-circle-o text-danger"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/home" class="nav-link ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('surat_masuk.index') }}" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('surat_keluar.index') }}" class="nav-link">
              <i class="nav-icon fa fa-envelope-open-o"></i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('disposisi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-file-o"></i>
              <p>
                Disposisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('instansi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-building-o"></i>
              <p>
                Instansi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-circle-o text-danger"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
              </li>
            </ul>
          </li>
          @endrole
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>