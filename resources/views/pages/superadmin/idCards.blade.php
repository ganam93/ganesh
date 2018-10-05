@extends('layouts.sidebar')
@section('title')
    Id Cards
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
                                <th>Major</th>
                                <th>Minor</th>
                                <th>Issued Date</th>
                                <th>Expiry Date</th>
                                <th>Company</th>
                                <th>Branch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($idcards as $idcard)
                            <tr>
                                <td>{{$idcard->id}}</td>
                                <td>{{$idcard->major}}</td>
                                <td>{{$idcard->minor}}</td>
                                <td>{{$idcard->issued_date}}</td>
                                <td>{{$idcard->expiry_date}}</td>
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