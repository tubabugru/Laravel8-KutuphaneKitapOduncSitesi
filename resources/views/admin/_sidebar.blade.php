<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        <a href="{{ route('admin_home')}}" class="nav-link">
                        Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin_category')}}" class="nav-link data-toggle="collapse" aria-expanded="false" data-target="#submenu-0" aria-controls="submenu-0"><i class="fa fa-fw fa-user-circle"></i>Kategori <span class="badge badge-success">6</span></a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin_books')}}" class="nav-link data-toggle="collapse" aria-expanded="false" data-target="#submenu-0" aria-controls="submenu-0"><i class="fa fa-fw fa-user-circle"></i>Books <span class="badge badge-success">6</span></a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin_message')}}" class="nav-link data-toggle="collapse" aria-expanded="false" data-target="#submenu-0" aria-controls="submenu-0"><i class="fa fa-fw fa-user-circle"></i>Contact Messages <span class="badge badge-success">6</span></a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin_review')}}" class="nav-link data-toggle="collapse" aria-expanded="false" data-target="#submenu-0" aria-controls="submenu-0"><i class="fa fa-fw fa-user-circle"></i>Reviews <span class="badge badge-success">6</span></a>

                    </li>


                    <li class="nav-item">
                        <a href="{{route('admin_setting')}}" class="nav-link data-toggle="collapse" aria-expanded="false" data-target="#submenu-0" aria-controls="submenu-0"><i class="fa fa-fw fa-user-circle"></i>Settings <span class="badge badge-success">6</span></a>

                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
