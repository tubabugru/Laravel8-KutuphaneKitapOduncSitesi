@section('title', $data->title . " Books List")
@section('description'){{$data->description}} @endsection
@section('keywords', $data->keywords)

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
    <meta name="author" content="Tuba Büğrü">
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
                    <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</li>
                    <li class="active">{{$data->title}}</li>
                </ol>
            </div><!--/breadcrums-->
            <div class="col-sm-3">
                @include('home._category')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" style="height: 300px" alt="" />
                        </div>

                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            @foreach($datalist as $rs)
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" width="30"  height="30"  alt=""></a>
                                </div>
                                    <div class="item">
                                        <a href=""><img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" width="30"  height="30"  alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" width="30"  height="30"  alt=""></a>
                                    </div>

                            </div>
                            @endforeach

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>

                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <form action="{{route('user_shopcart_add',['id' => $data->id])}}" method="post">
                                @csrf
                            <!--/product-information-->
                            <img src="" class="newarrival" alt="" />
                            <p>{{$data->title}}</p>
                            <p>{{$data->author}}</p>
                            <p>{{$data->publisher}}</p>
                            @php
                                $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                            @endphp
                            <span>
                                <input type="submit" value="1" max="1" />
                                <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Rezervasyon Yap
									</button>
								</span>
							</span>
                            </form>

                        </div>
                        <!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#details" data-toggle="tab">Details</a></li>
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews ({{$countreview}})</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="description" >
                            <div class="col-sm-12">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <p>{!! $data->description !!}</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Rezervasyon Yap</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="details" >
                            <div class="col-sm-12">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <p>{!! $data->detail !!}</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Rezervasyon Yap</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade active in" id="reviews" >
                            @foreach($reviews as $rs)
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>{{$rs->user->name}}</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></li>
                                    </ul>
                                    <p><b>{{$rs->subject}} </b></p>
                                    <p>{{$rs->review}} </p>
                                    @endforeach
                                    <p><b>Write Your Review</b></p>
                                    @livewire('review',['id'=>$data->id])
                                </div>
                        </div>

                    </div>
                </div><!--/category-tab-->
                @section('content')
                @show
            </div>
        </div>
    </div>
</section>

@include('home._footer')
@yield('footerjs')
</body>
</html>



