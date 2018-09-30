@extends('layouts.sidebar')
@section('title')
    Companies
@endsection
@section('content')
<div class="container">
    <div class="row form-group">
            <div class="card">
                <a href="{{url('/addCompany')}}"><button type="button" class="btn btn-primary">Add Company</button>
            </div>
        </div>
</div>


<div class="row">
    <div class="col-md-3">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 1</h3>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="col-md-3">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 2</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 3</h3>
            </div>
        </div>
            <!-- /.widget-user -->
    </div>

    <div class="col-md-3">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 4</h3>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="col-md-3">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 5</h3>
            </div>
        </div>
    </div>
</div>

@endsection