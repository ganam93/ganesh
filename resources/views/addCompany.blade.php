@extends('layouts.sidebar')
@section('title')
    Add Company
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="box box-info" style="margin:16px">
        <div class="box-header with-border">
          <h3 class="box-title">Add Company</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" style="margin:18px">
            <div class="box-body">

                <div class="form-group">
                    <label for="companyname" class="col-sm-2 control-label">Company Name</label>
                    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="companyname" placeholder="Enter name of the company">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pan" class="col-sm-2 control-label">Pan</label>
                    
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pan" placeholder="Enter Pan">
                    </div>
                </div>

                <div class="form-group">
                <label for="gst" class="col-sm-2 control-label">GST Number</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gst" placeholder="Enter GST">
                </div>
                </div>

                <div class="form-group">
                <label for="comapnyaddr" class="col-sm-2 control-label">Company Address</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="comapnyaddr" placeholder="Enter address">
                </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-2 control-label">State</label>
        
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" placeholder="Enter state">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-2 control-label">Country</label>
        
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" placeholder="Enter country">
                    </div>
                </div>

                <div class="form-group">
                    <label for="zipcode" class="col-sm-2 control-label">Zip COde</label>
        
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="zipcode" placeholder="Enter zip code">
                    </div>
                </div>

                <div class="form-group">
                    <label for="registration" class="col-sm-2 control-label">Registration Number</label>
        
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="registration" placeholder="Enter registration number">
                    </div>
                </div>

                <div class="form-group">
                    <label for="website" class="col-sm-2 control-label">Website</label>
        
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="website" placeholder="Enter website">
                    </div>
                </div>

            </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Register</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
@endsection('content')