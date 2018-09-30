@extends('layouts.sidebar')
@section('title')
    Companies
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 1</h3>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="description-block">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">Sensors</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="description-block">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">Id Cards</span>
                        </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
            <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="col-md-4">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Company 2</h3>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="description-block">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">Sensors</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="description-block">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">Id Cards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username">Company 3</h3>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Sensors</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="description-block">
                                <h5 class="description-header">13,000</h5>
                                <span class="description-text">Id Cards</span>
                            </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>
</div>
@endsection