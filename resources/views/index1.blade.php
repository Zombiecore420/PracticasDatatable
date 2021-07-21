<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema biblioteca</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnj.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css')}}"/>
        
       
    <!-- endinject -->
    <!-- plugin css for this page --> 
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="{{route('index')}}">
      <img src="{{asset('images/libro2.svg')}}" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="{{route('index')}}">
            <img src="{{asset('images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Buscar">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
            </li>
            <br>
            <br>
            <br>
            <br>
            <li class="nav-item nav-category">Menu Principal</li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">DataTables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('productos')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('carrito')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Carrito de compras</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('qrcode')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Generar código QR</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('escanearQR')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Escanear código QR</span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Reporte de Practicas.</h4>
                </div>
                <div id="contenido">
                     @yield('contenido')
                    </div>
              </div>
              </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Universidad del Papaloapan, UNPA 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Sistema alfa </span> 
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js')}}"></script>


        
  </body>
</html>




   