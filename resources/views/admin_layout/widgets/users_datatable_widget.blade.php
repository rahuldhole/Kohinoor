@php
    $users = App\Http\Controllers\UserController::showAll();
@endphp


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dataTables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="dataTables/shCore.css">
<link rel="stylesheet" type="text/css" href="dataTables/demo.css">
<style type="text/css" class="init">

</style>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="dataTables/shCore.js"></script>
<script type="text/javascript" language="javascript" src="dataTables/demo.js"></script>
<script type="text/javascript" language="javascript" class="init">

    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>
</head>
<body class="dt-example dt-example-bootstrap" style = "background-color: ECF0F5;">
<div class="container">
    <section>
        <div class="demo-html"></div>
        <table id="example" class="table table-striped table-bordered" style="width:100%; background-color: fff;">
            <thead>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $row)
                @php
                    if($row->profile_photo_path == NULL)
                        $prof_photo = "/dist/img/avatar.jpg";
                    else
                        $prof_photo = "/storage/".$row->profile_photo_path;
                @endphp
            <tr>
                <td>{{$row->id}}</td>
                <td><img src="{{$prof_photo}}" alt="User Image" height="70px" width = "70px">
                    <strong>{{$row->name}}</strong></td>
                <td>{{$row->email}}</td>
                <td>{{$row->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>
            </tfoot>
        </table>

    </section>>
</div>
</body>
