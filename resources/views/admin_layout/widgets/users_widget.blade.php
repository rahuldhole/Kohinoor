<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Latest Members</h3>

        <div class="box-tools pull-right">
            <span class="label label-danger">8 New Members</span>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <ul class="users-list clearfix">

    @php
        $users = App\Http\Controllers\UserController::show(1);
    @endphp
    @foreach($users as $card)
        <li>
            @php
                if($card->profile_photo_path == NULL)
                    $prof_photo = "/dist/img/avatar.jpg";
                else
                    $prof_photo = "/storage/".$card->profile_photo_path;
            @endphp
            <img src="{{$prof_photo}}" alt="User Image" height="160px" width = "160px">
            <a class="users-list-name" href="#">{{$card->name}}</a>
            <span class="users-list-date">{{$card->created_at}}</span>
        </li>
    @endforeach
        </ul>
        <!-- /.users-list -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="/users" class="uppercase">View All Users</a>
    </div>
    <!-- /.box-footer -->
</div>
