@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@thebestrezervation.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            @if ($setting->facebook !=null )<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li> @endif
                            @if ($setting->instagram !=null )<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li> @endif
                            @if ($setting->twitter !=null )<li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li> @endif
                            @if ($setting->youtube !=null )<li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li> @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a class="logo pull-left" href="{{route('home')}}"><img src="{{asset('assets')}}/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        @include('home.message')
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @auth
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            @endauth
                            @guest
                            <li><a href="/login"> <i class="fa fa-lock" ></i>Login</a></li>
                            <li><a href="/register"> <i class="fa fa-lock" ></i>Register</a></li>
                            @endguest

                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i>My Account</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-star"></i> Logout</a></li>
                            <li><a href="{{route('myreviews')}}"><i class="fa fa-star"></i> My Review</a></li>
                            <li><a href="{{route('user_books')}}"><i class="fa fa-crosshairs"></i> My Book</a></li>
                            <li><a href="{{route('user_shopcart')}}"><i class="fa fa-shopping-cart"></i>My Box</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->


</header><!--/header-->


