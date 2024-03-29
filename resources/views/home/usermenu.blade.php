@auth
<div class="brands_products"><!--brands_products-->
    <h2>User Panel</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{route('myprofile')}}">My Profile</a></li>
            <li><a href="{{route('user_orders')}}">My Rezervation</a></li>
            <li><a href="{{route('myreviews')}}"> My Reviews</a></li>
            <li><a href="{{route('user_books')}}"> My Book</a></li>
            <li><a href="{{route('user_shopcart')}}"> My Box</a></li>
            <li><a href="{{route('logout')}}"> Logout</a></li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp

            @if(($userRoles->contains('admin')))
                <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
            @endif

        </ul>
    </div>
</div><!--/brands_products-->
@endauth
