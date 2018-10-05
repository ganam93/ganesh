@extends('layouts.sidebar')
@section('title')
    Visitors
@endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id card</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Company</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($visitors as $visitor)
                        <tr>
                            <td>{{$visitor->id_card}}</td>
                            <td>{{$visitor->name}}</td>
                            <td>{{$visitor->contact}}</td>
                            <td>{{$visitor->check_in}}</td>
                            <td>{{$visitor->check_out}}</td>
                            <td>{{$visitor->company->cname}}</td>
                            @if($visitor->branch_id)
                            <td>{{$visitor->branch->city}}</td>
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