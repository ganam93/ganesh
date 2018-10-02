@extends('layouts.sidebar')
@section('title')
    Companies
@endsection
@section('content')
<div class="container">
    <div class="row form-group">
            <div class="card">
                <a href="{{url('/companies/add')}}"><button type="button" class="btn btn-primary">Add Company</button></a>
            </div>
        </div>
</div>
<div class="row">
@if(count($company))
    @foreach($company as $temp)   
            <div class="col-md-3">
            <a href="{{url('/companies/'.$temp->id)}}"><div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username">{{$temp->cname}}</h3>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>  
    @endforeach
@endif
</div>
@endsection