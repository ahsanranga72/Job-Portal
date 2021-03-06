<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Design And Implementation of A Professional CV Maker</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route ('home')}}" class="nav-link">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{{asset('dist/img/d.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Design And Implementation of A Professional CV Maker</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('dist/img/1.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a id="navbar" class="nav-link" href="#">
              {{ Auth::user()->name }}
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @if(Auth::user()->RegistrationAs=='')
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Management
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('addcategory') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Add Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('viewfeedback') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>View Feedbacks</p>
                  </a>
                </li>
              </ul>
            </li>
            @endif
            @if(Auth::user()->RegistrationAs==1 || Auth::user()->RegistrationAs=='')
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  CV
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">4</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('createcv') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Create CV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('viewcv') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>View CV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('editcv') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Edit CV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('cvtips')}}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>CV Writting Tips</p>
                  </a>
                </li>
              </ul>
            </li>
            @endif
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Job Portal
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->RegistrationAs==2 || Auth::user()->RegistrationAs=='')
                <li class="nav-item">
                  <a href="{{ route('createjob') }}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Create Job</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->RegistrationAs==1 || Auth::user()->RegistrationAs=='')
                <li class="nav-item">
                  <a href="{{route('jobforcandidate')}}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>View Jobs</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->RegistrationAs==2 || Auth::user()->RegistrationAs=='')
                <li class="nav-item">
                  <a href="{{route('viewjob')}}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>View Jobs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('appliedcandidates')}}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Applied Candidates</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->RegistrationAs==1 || Auth::user()->RegistrationAs=='')
                <li class="nav-item">
                  <a href="{{ route('jobtips')}}" class="nav-link">
                    <i class="far fa-file-text nav-icon"></i>
                    <p>Job Getting Tips</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('feedback') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Feedback
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">



      @yield('content')

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
  @stack('scripts')

</body>

</html>