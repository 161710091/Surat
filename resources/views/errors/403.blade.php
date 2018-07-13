<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <title>403</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">

  </head>

  <body class="hold-transition sidebar-mini" style="align-content: center;">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <section class="content" style="align-content: center;">
      <div class="error-page">
        <h2 class="headline text-warning"> 403</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-warning"></i> Oops! Halaman Tidak Bisa Diakses.</h3>

          <p>
            Halaman yang anda cari memiliki hak akses.
            Mungkin, anda harus <a href="{{ route('home') }}">kembali ke dashboard.</a>
          </p>

        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  </body>

</html>
