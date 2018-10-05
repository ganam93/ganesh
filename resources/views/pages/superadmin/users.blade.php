@extends('layouts.sidebar')
@section('title')
    Users
@endsection
@section('content')
<!-- Horizontal Form -->
<div class="box box-info" style="margin:16px">
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            @if(count($users) > 1)
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Username</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending">Role</th> 
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="">{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->role}}</td> <!-- The role of the user is in different table. We'll have to join those table OR
                                will have to add a column in User table -->
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            @endif 

        </div>
    </div>
</div>



@endsection('content')