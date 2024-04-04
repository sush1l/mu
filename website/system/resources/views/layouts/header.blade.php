<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>कृषि विकास कार्यालय</title>
  <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  {{-- livewire  --}}
  @livewireStyles
  <link
    href="{{asset('assets/css/nepali.datepicker.v3.1.min.css')}}"
    rel="stylesheet"
    type="text/css"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">गृहपृष्ठ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">सम्पर्क</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="खोजि गर्नुहोस्" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         {{Auth::user()->name}} <i class="fa fa-caret-down"></i>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Profile</span>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.profile.change',Auth::user())}}" class="dropdown-item">
            <i class="fa fa-user mr-2"></i>Profile Change
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.password.change',Auth::user())}}" class="dropdown-item">
            <i class="fa fa-key mr-2"></i>Change Password
            
          </a>
          @can('manage-user')
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.users.index')}}" class="dropdown-item">
            <i class="fa fa-users mr-2"></i>User Management
            
          </a>
          @endcan
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out-alt mr-2"></i> Logout
          </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      
      <span class="brand-text font-weight-light" > कृषि विकास कार्यालय</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
            
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                कार्यालय विवरण
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('setting.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>कार्यालय सेटिंग</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('office_detail.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>कार्यालय विवरण</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setting_employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>कर्मचारी सेटिंग</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link">
                <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                स्लाइडर
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                कर्मचारी विवरण
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('department.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>समुह </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('designation.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>पद</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>कर्मचारी लिस्ट</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                पुर्व कार्यालय प्रमुख
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('ex_employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>पुर्व कार्यालय प्रमुख थप्नुहोस </p>
                </a>
              </li>
             </ul>
          </li>
          <!--<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                स‌ञ्चालक समिति
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('samiti.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> स‌ञ्चालक समिति थप्नुहोस </p>
                </a>
              </li>
             </ul>
          </li>-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 कानुनी दस्ताबेज
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{route('dastabej_category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>कानुनी दस्ताबेज वर्ग </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dastabej.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> कानुनी दस्ताबेज थप्नुहोस</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dastabej.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> कानुनी दस्ताबेज लिस्ट</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                सूचना/ समाचार
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('notice.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>सूचना/ समाचार थप्नुहोस्</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('notice.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>सूचना/ समाचार  लिस्ट</p>
                </a>
              </li>
             
            </ul>
          </li>
          
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               प्रकाशन

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{route('publication_category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>प्रकाशन वर्ग </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('publication.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>प्रकाशन थप्नुहोस</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('publication.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>प्रकाशन लिस्ट</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                डाउनलोड
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="{{route('download_category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>डाउनलोड वर्ग</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('download.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>डाउनलोड थप्नुहोस</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('download.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>डाउनलोड लिस्ट</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                ग्यालरी
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photo_album.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>फोटो एल्बम</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('photo.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>फोटो ग्यालरी थप्नुहोस्</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('video.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>भिडियो थप्नुहोस्</p>
                </a>
              </li>
             </ul>
          </li>
          </li>
              
          <li class="nav-item">
            <a href="{{route('faq.index')}}" class="nav-link">
                <i class="nav-icon fas fa-microphone"></i>
              <p>
                धेरै सोधिएका प्रश्नहरु</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                बिल सार्बजनिकरण
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('bill.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>बिल सार्बजनिकरण थप्नुहोस्</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bill.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>बिल सार्बजनिकरण लिस्ट</p>
                </a>
              </li>
              
            </ul>
          </li>
          
         
          <li class="nav-item">
            <a href="{{route('link.index')}}" class="nav-link">
                <i class="nav-icon fas fa-link"></i>
              <p>
                लिंक थप्नुहोस्</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
              <p>
                सम्पर्क </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('Group.index')}}" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
              <p>
                सम्पर्क समूह</p>
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
      @yield('header')
  @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;2020 <a href="https://ninjainfosys.com/">Ninja Infosys</a>.</strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script
    src="{{asset('assets/js/nepali.datepicker.v3.1.min.js')}}"
    type="text/javascript"
></script>
<script type="text/javascript">
    window.onload = function () {
        var mainInput = document.getElementById("nepali-datepicker");
        mainInput.nepaliDatePicker();
    };
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
{{-- livewire  --}}
@livewireScripts
</body>
</html>
