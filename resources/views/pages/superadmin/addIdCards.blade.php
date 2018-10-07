@extends('layouts.sidebar')
@section('title')
{{$company->cname}} ---- Add Id Card
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="col-md-10">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Id Card</h3>
        </div>
        <!-- /.box-header -->
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

            {!! Form::open(['action'=> ['SubPages\IdCardsController@addIdcard', $id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{form::label('major','Major')}}
                {{form::text('major', '', ['class'=>'form-control', 'placeholder'=>'Enter Manufacturer'])}}  
            </div>

            <div class="form-group">
                {{form::label('minor','Minor')}}
                {{form::text('minor', '', ['class'=>'form-control', 'placeholder'=>'Enter model'])}}  
            </div>

            <div class="form-group">
                {{form::label('issued_date','Issued date')}}
                {{form::date('issued_date', '', ['class'=>'form-control', 'placeholder'=>'Enter location'])}}  
            </div>

            <div class="form-group">
                {{form::label('expiry_date','Expiry date')}}
                {{form::date('expiry_date', '', ['class'=>'form-control', 'placeholder'=>'Enter location'])}}  
            </div>

            <div class="form-group">
                {{form::label('branch_id','Branch')}}
                <select name="branch_id" class="form-control">
                    @if (isset($branches))
                        @foreach ($branches as $branch)
                            <option value ="{{$branch->id}}">{{ $branch->city }} </option>
                        @endforeach
                    @endif
                </select>  
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
    </div>
</div>
@endsection