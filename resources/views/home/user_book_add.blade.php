@section('title'," Add Book")
@section('description')
@section('keywords')

@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
                    <li class="active">Add Book </li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="card col-md-10">
                <div class="card">
                    <form role="form" action="{{route('user_book_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                        @foreach (  $datalist as $rs  )
                                            <option value="{{ $rs->id}}">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Publisher</label>
                                    <input type="text" name="publisher" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Publishing</label>
                                    <input type="number" name="publishing" value="4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Pages</label>
                                    <input type="number" name="pages" value="10" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="summernote" name="detail"></textarea>
                                    <script>
                                        $('#summernote').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option selected="selected">False</option>
                                        <option>True</option>
                                    </select>

                                </div>
                            </form>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Book</button>
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
