@extends('layouts.sidebar')

@section('content')

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-2 col-md-4 col-xs-6">
      <!-- small box -->
      <a href="{{url('/companies')}}">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$companies->count()}}</h3>
            <h4>Companies</h4>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-md-4 col-xs-6">
      <!-- small box -->
      <a href="{{url('/visitors')}}">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$visitors->count()}}</h3>
            <h4>Visitors</h4>
          </div>
          <div class="icon">
            <i class="ion ion-android-walk"></i>
          </div>
          <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-md-4 col-xs-6">
      <!-- small box -->
      <a href="{{url('/idcards')}}"><div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$idcards->count()}}</h3>

          <h4>ID Cards</h4>
        </div>
        <div class="icon">
          <i class="ion ion-card"></i>
        </div>
      <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
      </div></a>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-md-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>40</h3>
          <h4>Active IdCards</h4>
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
      <a href="{{url('/sensors')}}"><div class="small-box bg-red">
        <div class="inner">
          <h3>{{$sensors->count()}}</h3>
          <h4>Sensors</h4>
        </div>
        <div class="icon">
          <i class="ion ion-android-wifi"></i>
        </div>
      <!--  <a href="#" class="small-box-footer ">More info <i class="fa fa-arrow-circle-right"></i></a> -->
      </div></a>
    </div>
  <div class="col-lg-2 col-md-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>60</h3>
          <h4>Active Sensors</h4>
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
  <div class="col-lg-6 col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><b>Sensor Details</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Manufacturer</th>
            <th>Company</th>
            <th>Branch</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($sensors as $sensor)
            <tr>
              <td>{{$sensor->manufacturer}}</td>
              <td>{{$sensor->company->cname}}</td>
              @if($sensor->branch_id)
              <td>{{$sensor->branch->city}}</td>
              @else
              <td>-</td>
              @endif
              <td>-</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-xs-6">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><b>ID card Details</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id</th>
            <th>Compnay</th>
            <th>Branch</th>
            <th>Expiry Date</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($idcards as $idcard)
            <tr>
              <td>{{$idcard->id}}</td>
              <td>{{$idcard->company->cname}}</td>
              @if($idcard->branch_id)
              <td>{{$idcard->branch->city}}</td>
              @else
              <td>-</td>
              @endif
              <td>{{$idcard->expiry_date}}</td>
              <!-- Status table pending   -->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</section>
@endsection