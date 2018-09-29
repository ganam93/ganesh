<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('admin/dist/css/AdminLTE.min.css') }}>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href={{ asset('admin/dist/css/skins/_all-skins.min.css') }}>
  <!-- Morris chart -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/morris.js/morris.css') }}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/jvectormap/jquery-jvectormap.css') }}>
  <!-- Date Picker -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href={{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<style>
  .content{
    min-height:0%;
  }
  .small-box{
    border-radius: 7px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
  }
  .main-footer{
    margin-left:0px;
    margin-bottom:0px;
  }
  .content-wrapper, .main-footer{
    margin-top: 0;
  }
  .small-box .icon {
    top: 10px;
  }
  .small-box>.inner {
    padding: 20px;
}
  </style>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
        </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>53</h3>
              <p>Companies</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>150</h3>

              <p>Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-walk"></i>
            </div>
          <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>ID Cards</p>
            </div>
            <div class="icon">
              <i class="ion ion-card"></i>
            </div>
          <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>40</h3>

              <p>Active ID Cards</p>
            </div>
            <div class="icon">
              <i class="ion ion-card"></i>
            </div>
          <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>
              <p>Sensors</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-wifi"></i>
            </div>
          <!--  <a href="#" class="small-box-footer ">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
      <div class="col-lg-2 col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>60</h3>
              <p>Active Sensors</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-wifi"></i>
            </div>
        <!--     <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
          
        <!-- ./col -->
        </div>
      <!-- /.row -->
    </section>

    
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
    <!-- /.content -->
    <div class="box">
        <div class="box-header">
          <h3 class="box-title"><b>ID Card Details</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID Card</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Active</td>
            </tr>
            </tbody>
          </table>
            <tfoot>
                <td>

                    <a href="#" class="small-box-footer pull-right">More info <i class="fa fa-arrow-circle-right"></i></a>
                 
                </td>
            </tfoot>
        </div>
    </div>
    <!-- /.content-wrapper -->
</div>
<div class=" col-lg-6 col-xs-12">
<!-- /.content -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><b>Sensor Details</b></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sensors</th>
          <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Active</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Active</td>
        </tr>
        </tbody>
        <tfoot>
        </table>
        <td>
          <!--Sensors details -->
            <a href="#" class="small-box-footer pull-right">More info <i class="fa fa-arrow-circle-right"></i></a>

        </td>
        </tfoot>
    </div>
</div>
<!-- /.content-wrapper -->
</section>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="#">Secure Lobby</a>.</strong> All rights
    reserved.
  </footer>
</div>


<!-- jQuery 3 -->
<script src={{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src={{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}></script>
<!-- Morris.js charts -->
<script src={{ asset('admin/bower_components/raphael/raphael.min.js') }}></script>
<script src={{ asset('admin/bower_components/morris.js/morris.min.js') }}></script>
<!-- Sparkline -->
<script src={{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}></script>
<!-- jvectormap -->
<script src={{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}></script>
<script src={{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}></script>
<!-- daterangepicker -->
<script src={{ asset('admin/bower_components/moment/min/moment.min.js') }}></script>
<script src={{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}></script>
<!-- datepicker -->
<script src={{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}></script>
<!-- Slimscroll -->
<script src={{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}></script>
<!-- FastClick -->
<script src={{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('admin/dist/js/adminlte.min.js') }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset('admin/dist/js/pages/dashboard.js') }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('admin/dist/js/demo.js') }}></script>
