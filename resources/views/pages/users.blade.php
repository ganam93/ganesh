@extends('layouts.sidebar')

@section('content')
<!-- Horizontal Form -->
<div class="box box-info" style="margin:16px">
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            @foreach($users->data as $user)
                        {{$user}}
                        @endforeach
            <!-- @if(count($users) > 1)
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending">CSS grade</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="">{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->role}}</td>
                                <td>-</td>
                                <td class="sorting_1">X</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            @endif -->

        </div>
    </div>
</div>



@endsection('content')