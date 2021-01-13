@extends('admin_layout.admin_dash_layout')
@section('title', 'Reservations')
@extends('admin_layout.header')
@section('admin_content_header')
    <h1>
        Reservations
        <small>All reservations</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="mydash"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">reservations</li>
    </ol>
@endsection

@section('admin_dash_container')

    <div class="row">
        <div class="col-md-12">
            <!--include('admin_layout.widgets.users_datatable_widget')-->
            <iframe frameborder="0" height = "700" style="overflow:scroll; width: 100%" src="{{url('allreservations')}}" marginheight="1" marginwidth="1" name="cboxmain" id="cboxmain" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
        </div>
    </div>
@endsection
