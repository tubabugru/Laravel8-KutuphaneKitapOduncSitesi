@section('title', 'My Books')

@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Books</title>
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
                    <li class="active">User Book</li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="card col-md-10">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Publishing</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (  $datalist as $rs  )
                                <tr>
                                    <td class="thumb">
                                        @if ($rs->book->image)
                                            <img src="{{Storage::url($rs->book->image)}}" height="30" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('book',['id'=>$rs->book->id])}}">
                                            {{ $rs->book->title}}</a>
                                    </td>
                                    <td>{{ $rs->book->author}}</td>
                                    <td>{{ $rs->book->publisher}}</td>
                                    <td>{{ $rs->book->publishing}}</td>

                                    <td><a href="{{route('user_shopcart_update',['id'=> $rs->id])}}"> <img
                                                src="{{asset('assets/admin/images')}}/edit.jpg" height="25"> </a></td>
                                    <td><a href="{{route('user_shopcart_delete',['id'=> $rs->id])}}"
                                           onclick="return confirm('Delete! Are you sure?')"> <img
                                                src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a></td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <form role="form" action="{{route('user_order_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Bitiş tarihi</label>
                            <input type="date" name="returndate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Not </label>
                            <textarea name="note" class="form-control"></textarea>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-fefault cart">
                                Rezervasyon Yap
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        <!--<div class="card-body">
                @foreach ($datalist as $rs)
            <p>{{ $rs->title }}</p>
                @endforeach

            </div>-->

            @section('content')
            @show
        </div>
    </div>
</section>

@include('home._footer')
@yield('footerjs')
</body>
</html>
