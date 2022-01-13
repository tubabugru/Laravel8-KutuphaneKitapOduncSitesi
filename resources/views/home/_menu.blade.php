<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{route('home')}}" class="active">HOME</a></li>
                        <li><a href="{{route('home')}}" class="active">NEW BOOKS</a></li>
                        <li><a href="{{route('aboutus')}}" class="active">ABOUT US</a></li>
                        <li><a href="{{route('references')}}" class="active">REFERENCES</a></li>
                        <li><a href="{{route('contact')}}" class="active">CONTACT</a></li>
                        <li><a href="{{route('myreviews')}}" class="active">MY REVIEW</a></li>
                        <li><a href="{{route('faq')}}" class="active">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
            <form action="{{route('getbook')}}" method="post">
                @csrf
                @livewire('search')
            </form>
            @section('footerjs')
               @livewireScripts
            @endsection
            </div>
        </div>
    </div>
</div>
</div><!--/header-bottom-->
