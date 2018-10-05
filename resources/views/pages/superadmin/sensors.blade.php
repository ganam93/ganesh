@extends('layouts.sidebar')
@section('title')
    Sensors
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Manufacturer</th>
                                <th>Model</th>
                                <th>Location</th>
                                <th>Company</th>
                                <th>Branch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sensors as $sensor)
                            <tr>
                                <td>{{$sensor->id}}</td>
                                <td>{{$sensor->manufacturer}}</td>
                                <td>{{$sensor->model}}</td>
                                <td>{{$sensor->location}}</td>
                                <!-- Work on a logic to display company and branch -->
                                <td>-</td>
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
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection