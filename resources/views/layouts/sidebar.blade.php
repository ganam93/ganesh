<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SecureLobby | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SL</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SecureLobby</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="font-size:24px;margin:8px;color:white">
                    @yield('title')
                </ul>

                <!-- Right side of navbar -->
                <div class="navbar-custom-menu" style="margin-right:10px">
                    <ul class="nav navbar-nav">
                        <!-- User name -->
                        <li>
                            <a>
                                <span class="hidden-xs" style="font-size: 17px !important;"><strong>{{Auth::user()->username}}</strong></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out" ></span> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                        <!-- Log Out option -->
                        <li>
                        </li>
                    </ul>
                </div>    
            </nav>       
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree" style="font-size:18px">
                    

                    <!-- PagesController is created just to route pages from here.
                         e.g.
                            <li style="margin-top:14px">
                                <a href="{{url('/superadmin/dashboard')}}">
                                    <i class="fa fa-home"></i> <span style="margin-top:4px">Dashboard</span>
                                </a>
                            </li>
                        Here dev_shubham has given url '/superadmin/dashboard' that means we will need to change the URL
                        for every user, means sidebar for each user... Right?
                        This problem can be avoided by folowing changes.

                        NOTE : Check PagesController to know how it is done. dev_rohit has done it for dashboard.
                    -->

                    <li style="margin-top:14px">
                                <a href="{{url('/')}}">
                                    <i class="fa fa-home"></i> <span style="margin-top:4px">Dashboard</span>
                                </a>
                    </li>

                    @if(Auth::user()->hasRole('superadministrator'))
                    <li>
                    <a href="{{url('/companies')}}">
                        <i class="fa fa-building"></i> <span style="margin:4px">Companies</span>
                    </a>
                    </li>
                    @endif

                    <li>
                    <a href="{{url('/visitors')}}">
                        <i class="fa fa-male"></i> <span style="margin:4px">Visitors</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{url('/idcards')}}">
                        <i class="fa fa-id-badge"></i> <span style="margin:4px">Id cards</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{url('/sensors')}}">
                        <i class="fa fa-wifi"></i> <span style="margin:4px">Sensors</span>
                    </a>
                    </li>

                    @if(Auth::user()->hasRole('superadministrator|administrator'))
                    <li>
                    <a href="{{url('/users')}}">
                        <i class="fa fa-user"></i> <span style="margin:4px">Users</span>
                    </a>
                    </li>
                    @endif
                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper" style="height:1000px">

            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable()
      })

    </script>
</body>
</html>