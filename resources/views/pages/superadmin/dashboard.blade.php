@extends('layouts.sidebar')

@section('content')
<style>
  .content {
    min-height: 0px;
  }
  .small-box{
    border-radius: 5px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
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

</div>

@endsection