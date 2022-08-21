<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header"> 
                <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{asset('BU_logo.png')}}"alt="BU logo" style="width: 180px;"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{ucwords(session()->get('staff_name'))}}</span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                <div class="logo-element">
                    SGS
                </div>
            </li>

            @if (Session::get('authenticated')==true)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="#">
                <a href="{{route('lecturer-addcourse')}}"><i class="fa fa-building"></i> <span class="nav-label">Add Course</span></a>
            </li>
            <li class="">
                <a href="{{route('lecturer-import')}}"><i class="fa fa-user"></i> <span class="nav-label">Upload Students</span> </a>
            </li>
            <li class="#">
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Add Students</span></a>
            </li>
            
            <li class="#">
            <li class="#">
                <a href="#"><i class="fa fa-eye"></i> <span class="nav-label">All Results</span></a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-users"></i> <span class="nav-label">User management</span> </a>
            </li>
            @endif

            {{-- <li class="">
                <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">Requistions</span></a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-file"></i> <span class="nav-label">Purchase Orders</span> </a>
            </li> --}}
            
        </ul>

    </div>
</nav>
