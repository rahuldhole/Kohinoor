@php
    $bookings = App\Http\Controllers\BookController::showNew();
//echo $bookings;
@endphp
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">New Reservations</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="products-list product-list-in-box">

                    @foreach($bookings as $book)
                        @php
                            if($book->profile_photo_path == NULL)
                                $prof_photo = "/dist/img/avatar.jpg";
                            else
                                $prof_photo = "/storage/".$book->profile_photo_path;
                        @endphp



                    <li class="item">
                        <div class="product-img">
                            <img src="{{$prof_photo}}" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">{{$book->name}}</a>
                            <span class="product-description">
                                <strong>{{$book->on_date}}</strong> | {{$book->start_time}} to {{$book->end_time}}
                        </span>
                        </div>
                    </li>
                    <!-- /.item -->


                    @endforeach

                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="reservations" class="uppercase">View All Reservations</a>
            </div>
            <!-- /.box-footer -->
        </div>
