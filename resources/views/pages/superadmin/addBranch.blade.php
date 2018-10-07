@extends('layouts.sidebar')
@section('title')
    {{$company->cname}} ---- Add Branch
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Branch</h3>
        </div><!-- /.box-header -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- form start -->
        <div class="box-body">
            {!! Form::open(['action'=> ['SubPages\BranchesController@addbranch', $id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{form::label('addr','Address')}}
                {{form::text('addr_line1', '', ['class'=>'form-control', 'placeholder'=>'Address line 1'])}}  <br>
                {{form::text('addr_line1', '', ['class'=>'form-control', 'placeholder'=>'Address line 2'])}}  
            </div>

            <div class="form-group">
                {{form::label('city','City')}}
                {{form::text('city', '', ['class'=>'form-control', 'placeholder'=>'Enter city'])}}  
            </div>

            <div class="form-group">
                {{form::label('state','State')}}
                {{form::text('state', '', ['class'=>'form-control', 'placeholder'=>'Enter state'])}}  
            </div>

            <div class="form-group">
                {{form::label('country','Country')}}
                {{form::text('country', '', ['class'=>'form-control', 'placeholder'=>'Enter country'])}}  
            </div>

            <div class="form-group">
                {{form::label('zipcode','Zip Code')}}
                {{form::text('zipcode', '', ['class'=>'form-control', 'placeholder'=>'Enter zipcode'])}}  
            </div>
    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{form::submit('Submit', ['class'=>'btn btn-primary float-left'])}}
                <a href="{{ url('/companies/'.$id)}}">
                    <p class="btn btn-primary pull-right">Cancel</p>
                </a>
                {!! Form::close() !!}
            </div>
            <!-- /.box-footer -->
        
    </div>
</div>
@endsection