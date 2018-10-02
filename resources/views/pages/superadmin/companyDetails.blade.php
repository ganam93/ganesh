@extends('layouts.sidebar')
@section('title')
    Companies
@endsection
@section('content')
<div class="content-header">
  <h1>{{$company->cname}}</h1>
</div>
    <!-- Main content -->

  <section class="content">
    <div class="row">
      <div class="col-lg-6">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab"><b>Company Details</b></a></li>
            <li><a href="#timeline" data-toggle="tab"><b>Branch Details</b></a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
                Company PAN : {{$company->pan}}
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
        
          
            </div>
          </div>
        </div>
      </div>
      <div class="Box col-lg-6">
        <div class="col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>53</h3>
              <p>ID Cards</p>
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
              <h3>53</h3>
              <p>ID Cards</p>
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
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sensor</th>
                      <th>Company</th>
                      <th>Branch</th>
                      <th>Contact</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      <td>5.5</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td>1.9</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    </tfoot>
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
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sensor</th>
                      <th>Company</th>
                      <th>Branch</th>
                      <th>Contact</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      <td>5.5</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td>1.9</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td>1.8</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td>1.7</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
        </div>
          </div>
@endsection