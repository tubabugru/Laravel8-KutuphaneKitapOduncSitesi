@section('title', 'My Books')
@section('description')
@section('keywords')

@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
                    <li class="active">User Book </li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="card col-md-10">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('user_book_add')}}" type="button" class="btn btn-block btn-info" style="width: 120px" >Add Book</a>
                            @include('home.message')
                        </div>
                        <!-- ============================================================== -->
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Publisher</th>
                                                    <th>Publishing</th>
                                                    <th>Pages</th>
                                                    <th>Image</th>
                                                    <th>Image Gallery</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach (  $datalist as $rs  )
                                                    <tr>
                                                        <td>{{ $rs->id}}</td>
                                                        <td>
                                                            {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}

                                                        </td>
                                                        <td>{{ $rs->title}}</td>
                                                        <td>{{ $rs->author}}</td>
                                                        <td>{{ $rs->publisher}}</td>
                                                        <td>{{ $rs->publishing}}</td>
                                                        <td>{{ $rs->pages}}</td>
                                                        <td>
                                                            @if ($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                            @endif
                                                        </td>
                                                        <td><a href="{{route('user_image_add',['book_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/gallery.jpg" height="25"></a></td>

                                                        <td>{{ $rs->status}}</td>
                                                        <td><a href="{{route('user_book_edit',['id'=> $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.jpg" height="25"> </a></td>
                                                        <td><a href="{{route('user_book_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table  -->
                        <!-- ============================================================== -->
                    </div>

                </div>

            <!--<div class="card-body">
                @foreach ($datalist as $rs)
                <p>{{ $rs->title }}</p>
                @endforeach

                </div>-->

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
