@extends('layouts.sidebar')
@section('title')
    Add Company Details
@endsection
@section('content')
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Company</h3>
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
            {!! Form::open(['action' => 'SubPages\CompaniesController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{form::label('cname','Company Name')}}
                {{form::text('cname', '', ['class'=>'form-control', 'placeholder'=>'Enter company name'])}}  
            </div>
            <div class="form-group">
                {{form::label('pan','Pan')}}
                {{form::text('pan', '', ['class'=>'form-control', 'placeholder'=>'Enter pan'])}}  
            </div>
            <div class="form-group">
                {{form::label('GST','GST')}}
                {{form::text('GST', '', ['class'=>'form-control', 'placeholder'=>'Enter GST'])}}  
            </div>
            <div class="form-group">
                {{form::label('comapnyaddr','Company Address')}}
                {{form::text('addr_line1', '', ['class'=>'form-control', 'placeholder'=>'Enter company address'])}} <br>
                {{form::text('addr_line2', '', ['class'=>'form-control', 'placeholder'=>'Enter company address'])}}   
            </div>
            <div class="form-group">
                {{form::label('city','City')}}
                {{form::text('city', '', ['class'=>'form-control', 'placeholder'=>'Enter city'])}}  
            </div>
            <div class="form-group">
                {{form::label('country','Country')}}
                {{form::text('country', '', ['class'=>'form-control', 'placeholder'=>'Enter country'])}}  
            </div>
            <div class="form-group">
                {{form::label('zipcode','Zip Code')}}
                {{form::text('zipcode', '', ['class'=>'form-control', 'placeholder'=>'Enter zip code'])}}  
            </div>
            <div class="form-group">
                {{form::label('registration','Registration Number')}}
                {{form::text('registration', '', ['class'=>'form-control', 'placeholder'=>'Enter registration/CIN number'])}}  
            </div>
            <div class="form-group">
                {{form::label('website','Website')}}
                {{form::text('website', '', ['class'=>'form-control', 'placeholder'=>'Enter website'])}}  
            </div>
        </div>
        <div class="box-footer">
            {{form::submit('Submit', ['class'=>'btn btn-primary float-left'])}}
            <a href="{{ url('/companies')}}">
                <p class="btn btn-primary pull-right">Cancel</p>
            </a>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection