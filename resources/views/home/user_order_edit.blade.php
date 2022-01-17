@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oder Books</title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


    @yield('css')
    @yield('headerjs')
</head><!--/head-->

<body>
@include('home._header')

@include('home._menu')

<section>
    <div class="container">
        <div class="row">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Order </li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="card col-md-10">
                <div class="shopper-info">
                    <form role="form" action="{{route('user_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <form>

                                <div class="form-group">
                                    <label>User Id</label>
                                    <input type="text" name="title" value="{{$data->user_id}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Book Id</label>
                                    <input type="text" name="title" value="{{$data->book_id}}" class="form-control">
                                </div>
                                <!-- Buraları doldur data bilgileri ile  order -->
                                <div class="form-group">
                                    <label>Book Date</label>
                                    <input type="text" name="title" value="{{$data->bookdate}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Days</label>
                                    <input type="text" name="title" value="{{$data->days}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status">
                                        <option @if($data->status=='Canceled') selected @endif value="Canceled" >Canceled</option>
                                        <option @if($data->status=='Completed') selected @endif value="Completed">Completed</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" href="">Güncelle</button>
                                <br><br>

                            </form>
                        </div>
                </div>
                </div>
            </div>

            @section('content')
            @show
        </div>
    </div>
</section>

@include('home._footer')
@yield('footerjs')
</body>
</html>
