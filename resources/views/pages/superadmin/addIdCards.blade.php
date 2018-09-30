@extends('layouts.sidebar')
@section('title')
    Add Id Cards
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="col-md-10">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Sensors</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" style="margin:18px">
            <div class="box-body">

                <div class="form-group">
                    <label for="idno" class="col-sm-2 control-label">Id card number</label>
                    
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="idno" placeholder="Enter Id card number">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mfg" class="col-sm-2 control-label">Manufacturer</label>
                    
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="mfg" placeholder="Enter Manufacturer">
                    </div>
                </div>

                <div class="form-group">
                <label for="mfgdate" class="col-sm-2 control-label">Manufactured Date</label>

                <div class="col-sm-6">
                    <input type="date" class="form-control" id="mfgdate" placeholder="Enter manufactured date">
                </div>
                </div>

                <div class="form-group">
                <label for="branch" class="col-sm-2 control-label">Branch</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="branch" placeholder="Enter branch">
                </div>
                </div>

                <div class="form-group">
                    <label for="expiry" class="col-sm-2 control-label">Expiry</label>
        
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="expiry" placeholder="Enter expiry date">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Save</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</div>
@endsection