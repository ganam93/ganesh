@extends('layouts.sidebar')
@section('title')
{{$company->cname}}
@endsection
@section('content')
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-6">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab"><b>Company Details</b></a></li>
            <li><a href="#timeline" data-toggle="tab"><b>Branch Details</b></a></li>
            <li class="btn btn-primary pull-right" style="margin-top:3px"> Add Branch</li>
          </ul>
          
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="well well-sm">
                  Address : {{$company->addr_line1}}  <br>
                  City : {{$company->city}}  <br>
                  Country : {{$company->country}}  <br>
                  Company PAN : {{$company->pan}}  <br>
                  Zipcode : {{$company->zipcode}}  <br>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
              @foreach ($branches as $branch)
                <div class="well well-sm">
                    Address : {{$branch->addr_line1}}  <br>
                    City : {{$branch->city}}  <br>
                    State : {{$branch->pan}}  <br>
                    Country : {{$branch->country}}  <br>
                    Zipcode : {{$branch->zipcode}}  <br>
                </div>    
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="Box col-lg-6">
        <div class="col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$idcards->count()}}</h3>
              <h4>ID Cards</h4>
            </div>
            
            <div class="icon">
              <i class="icon  ion-card"></i>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$sensors->count()}}</h3>
              <h4>Sensors</h4>
            </div>
            
            <div class="icon">
              <i class="icon  ion-android-wifi"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  <div class="row">
  <div class="col-lg-6 col-xs-12">
      <div class="box">
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
              <th>Branch</th>
              <th>Location</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($sensors as $sensor)
                <tr>
                  <td>{{$sensor->manufacturer}}</td>
                  @if($sensor->branch_id)
                  <td>{{$sensor->branch->city}}</td>
                  @else
                  <td>-</td>
                  @endif
                  <td>{{$sensor->location}}</td>
                  <td>-</td> <!-- Status table pending   -->
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

<!-- Table 2-->
    <div class="col-xs-6">
      <div class="box">
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
              <th>Branch</th>
              <th>Expiry Date</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($idcards as $idcard)
              <tr>
                <td>{{$idcard->id}}</td>
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
@endsection