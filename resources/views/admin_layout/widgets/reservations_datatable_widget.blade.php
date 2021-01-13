@php
    $bookings = App\Http\Controllers\BookController::showAll();
$i=0;
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
            <h1>{{session('msg')}}</h1>
            <thead>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Date</th>
                <th>Players</th>
                <th>Special Requests</th>
                <th>Status</th>
                <th>Change</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $book)

                @php
                $i +=1;
                    if($book->profile_photo_path == NULL)
                        $prof_photo = "/dist/img/avatar.jpg";
                    else
                        $prof_photo = "/storage/".$book->profile_photo_path;

                    if($book->status == 2)
                        $status_is = "Confirmed";
                    elseif ($book->status==0)
                        $status_is = "Cancelled";
                    else $status_is = "Pending";
                @endphp
            <tr>
                <td>{{$i}}</td>
                <td><img src="{{$prof_photo}}" alt="User Image" height="70px" width = "70px">
                    <strong>{{$book->name}}</strong></td>
                <td>{{$book->start_time}}</td>
                <td>{{$book->end_time}}</td>
                <td>{{$book->on_date}}</td>
                <td>{{$book->chairs}}</td>
                <td>{{$book->user_notes}}</td>
                <td>{{$status_is}}</td>
                <td>
                    <a href= "res_update/{{$book->id}}/2">Approve</a>
                    <a href= "res_update/{{$book->id}}/0">Reject</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Date</th>
                <th>Players</th>
                <th>Special Requests</th>
                <th>Status</th>
                <th>Change</th>
            </tr>
            </tfoot>
        </table>

    </section>>
</div>
</body>
