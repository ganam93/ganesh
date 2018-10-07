@extends('layouts.sidebar')

@section('content')

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  
  <div class="row">
  <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-blue" style="text-align : center; padding : 1px;">
              <h3>Sensors</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Total <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Active <span class="pull-right badge bg-green">5</span></a></li>
                <li><a href="#">Inactive<span class="pull-right badge bg-red">12</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-maroon" style="text-align : center; padding : 1px;">
              <h3>ID CARDS</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Total <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Active <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Inactive<span class="pull-right badge bg-green">12</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-orange" style="text-align : center; padding : 1px;">
              <h3>Sensors</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Total <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Active <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Inactive<span class="pull-right badge bg-green">12</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-yellow" style="text-align : center; padding : 1px;">
              <h3>Sensors</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Total <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Active <span class="pull-right badge bg-green">5</span></a></li>
                <li><a href="#">Inactive<span class="pull-right badge bg-red">12</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>
  <!-- /.row -->

<div class="row">
  <div class="col-lg-6 col-xs-12">
    <div class="box box-widget widget-user-2" style="margin-left : 0px;">
      <div class="box-header">
        <h3 class="box-title"><b>Sensor Details</b></h3>
        <button class="btn btn-primary pull-right">Add Sensor</button>
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
    <div class="box box-widget widget-user-2">
      <div class="box-header">
        <h3 class="box-title"><b>ID card Details</b></h3>
        <button class="btn btn-primary pull-right">Add Id Card</button> 
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
</div>
</section>
@endsection