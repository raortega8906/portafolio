<!DOCTYPE html>
{{--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
--}}
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Mi Portafolio</title>

  {{--  Font Awesome Icons   --}}
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  {{--  Theme style   --}}
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  {{--  Google Font: Source Sans Pro   --}}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  {{--   Navbar   --}}
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     {{--  Left navbar links  --}}
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/project') }}" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/admin') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/project') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proyecto</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Portafolio
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Google -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://twitter.com/raortega8906"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.instagram.com/rafa_ortega89/"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.linkedin.com/in/rafael-a-ortega-valderrama-ab7a1aa8/"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-linkedin"></i
                    ></a>
                <!-- Github -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://github.com/raortega8906"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © {{date('Y')}}:
            <a class="text-dark" href="https://rafaelortegaweb.herokuapp.com/">Rafael A. Ortega</a>
        </div>
        <!-- Copyright -->
    </footer>
  <!-- ./footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- CKeditor -->
<script src="{{ asset("js/app.js") }}"></script>
<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
</body>
</html>
