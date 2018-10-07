@extends('layouts.sidebar')
@section('title')
{{$company->cname}} ----> Edit Details
@endsection
@section('content')
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Company Details</h3>
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
            {!! Form::open(['action' => ['SubPages\CompaniesController@update', $id], 'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{form::label('cname','Company Name')}}
                {{form::text('cname', $company->cname, ['class'=>'form-control', 'placeholder'=>'Enter company name', 'readonly'])}}  
            </div>
            <div class="form-group">
                {{form::label('pan','Pan')}}
                {{form::text('pan', $company->pan, ['class'=>'form-control', 'placeholder'=>'Enter pan', 'readonly'])}}  
            </div>
            <div class="form-group">
                {{form::label('GST','GST')}}
                {{form::text('GST', $company->GST, ['class'=>'form-control', 'placeholder'=>'Enter GST', 'readonly'])}}  
            </div>
            <div class="form-group">
                {{form::label('comapnyaddr','Company Address')}}
                {{form::text('addr_line1', $company->addr_line1, ['class'=>'form-control', 'placeholder'=>'Enter company address'])}}
                {{form::text('addr_line2', $company->addr_line2, ['class'=>'form-control', 'placeholder'=>'Address line 2'])}}  
            </div>
            <div class="form-group">
                {{form::label('city','City')}}
                {{form::text('city', $company->city, ['class'=>'form-control', 'placeholder'=>'Enter city'])}}  
            </div>
            <div class="form-group">
                {{form::label('country','Country')}}
                {{form::text('country', $company->country, ['class'=>'form-control', 'placeholder'=>'Enter country'])}}  
            </div>
            <div class="form-group">
                {{form::label('zipcode','Zip Code')}}
                {{form::text('zipcode', $company->zipcode, ['class'=>'form-control', 'placeholder'=>'Enter zip code'])}}  
            </div>
            <div class="form-group">
                {{form::label('reg_no','Registration Number')}}
                {{form::text('reg_no', $company->reg_no, ['class'=>'form-control', 'placeholder'=>'Enter registration/CIN number', 'readonly'])}}  
            </div>
            <div class="form-group">
                {{form::label('website','Website')}}
                {{form::text('website', $company->website, ['class'=>'form-control', 'placeholder'=>'Enter website'])}}  
            </div>
        </div>
        <div class="box-footer">
            {{form::submit('Update', ['class'=>'btn btn-primary float-left'])}}
            <a href="{{ url('/companies')}}">
                <p class="btn btn-primary pull-right">Cancel</p>
            </a>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection