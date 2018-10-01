@extends('layouts.sidebar')
@section('title')
    Add Branch
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="col-md-10">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Branch</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" style="margin:18px">
            <div class="box-body">

                <div class="form-group">
                    <label for="branchid" class="col-sm-2 control-label">Branch Id</label>
                    
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="branchid" placeholder="Enter Branch id">
                    </div>
                </div>

                <div class="form-group">
                    <label for="addr" class="col-sm-2 control-label">Address</label>
                    
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="addr" placeholder="Enter Address">
                    </div>
                </div>

                <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="state" placeholder="Enter state">
                </div>
                </div>

                <div class="form-group">
                <label for="country" class="col-sm-2 control-label">Country</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="country" placeholder="Enter country">
                </div>
                </div>

                <div class="form-group">
                    <label for="zipcode" class="col-sm-2 control-label">Zip code</label>
        
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="zipcode" placeholder="Enter zipcode">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact</label>
        
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="cname" class="col-sm-2 control-label">Name</label>
                
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cname" placeholder="Enter contact's name">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="cdesignation" class="col-sm-2 control-label">Designation</label>
                
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cdesignation" placeholder="Enter designation of the contact person">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="cmobile" class="col-sm-2 control-label">Mobile</label>
                
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cmobile" placeholder="Enter mobile number">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="cdesignation" class="col-sm-2 control-label">Landline</label>
                
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cdesignation" placeholder="Enter landline number">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="cemail" class="col-sm-2 control-label">Email</label>
                
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="cemail" placeholder="Enter designation of the contact person">
                            </div>
                        </div>
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