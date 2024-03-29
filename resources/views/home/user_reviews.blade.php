@section('title'," My Review")
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
                    <li class="active">My Review </li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="card col-md-10">
                <div class="card">
                 <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                         <th>Id</th>
                         <th>Book</th>
                         <th>Subject</th>
                         <th>Review</th>
                         <th>Status</th>
                         <th>Date</th>

                         <th style="..." colspan="3">Actions</th>

                     </tr>
                     </thead>
                     <tbody>
                     @include('home.message')
                     @foreach($datalist as $rs)
                         <tr>
                             <td>{{$rs->id}}</td>
                             <td> <a href="{{route('book',['id'=> $rs->book->id])}}" target="_blank">
                                 {{$rs->book->title}}</a>
                             </td>
                             <td>{{$rs->subject}}</td>
                             <td>{{$rs->review}}</td>
                             <td>{{$rs->status}}</td>
                             <td>{{$rs->created_at}}</td>
                             <td>
                                 <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                             </td>
                         </tr>
                     @endforeach

                     </tbody>

                 </table>
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
