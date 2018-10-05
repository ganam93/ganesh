@extends('layouts.sidebar')
@section('title')
    Sensors
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
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
                                <td>{{$sensor->company->cname}}</td>
                                @if($sensor->branch_id)
                                <td>{{$sensor->branch->city}}</td>
                                @else
                                <td>-</td>
                                @endif
                                
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