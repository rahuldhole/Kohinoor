@extends('admin_layout.admin_dash_layout')
@section('title', 'Dashboard')
@extends('admin_layout.header')
@section('admin_content_header')
    <h1>
        Dashboard
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('admin_dash_container')

    <div class="row">
        <div class="col-md-6">
            @include('admin_layout.widgets.users_datatable_widget')
        </div>
    </div>
@endsection
