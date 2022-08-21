<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header"> 
                <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{asset('BU_logo.png')}}"alt="BU logo" style="width: 180px;"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" id="s-menu" href="#">
                            <span class="block m-t-xs font-bold staffName">{{ucwords(session()->get('staff_name'))}}</span>
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

           {{-- <div class="linkR">
                @if (Session::get('authenticated')==true)
                <li class="active">
                    <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li class="#">
                    <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Add Course</span></a>
                </li>
                <li class="#">
                    <a href="{{route('lecturer-import')}}"><i class="fa fa-user"></i> <span class="nav-label">Upload Students</span> </a>
                </li>
                <li class="#">
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Add Students</span></a>
                </li>

                <li class="#">
                    <a href="#"><i class="fa fa-eye"></i> <span class="nav-label">All Results</span></a>
                </li>
                <li class="">
                    <a href=""><i class="fa fa-users"></i> <span class="nav-label">User management</span> </a>
                </li>
                @endif --
           </div> --}}
           @if (Session::get('authenticated')==true)
           <li class="active">
               <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
           </li>
           <li class="#">
               <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Add Course</span></a>
           </li>
           <li class="#">
               <a href="{{route('lecturer-import')}}"><i class="fa fa-user"></i> <span class="nav-label">Upload Students</span> </a>
           </li>
           <li class="#">
               <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Add Students</span></a>
           </li>
           
           <li class="#">
               <a href="#"><i class="fa fa-eye"></i> <span class="nav-label">All Results</span></a>
           </li>
           <li class="">
               <a href=""><i class="fa fa-users"></i> <span class="nav-label">User management</span> </a>
           </li>
           @endif --
            
        </ul>

    </div>
</nav>
<style>
    #s-menu{
        transition: all step-end 2s;
    }
    .staffName{
        padding-top: 2rem;
    }
    .log-Out:hover{
        background-color: black;
        color: blue;
    }
    .active{
        background-color: #337ab7;
    }
</style>
@section('scripts')
<script src="{{asset('js/plugins/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/plugins/dataTables/dataTables/bootstrap.min.js')}}"></script>
   <script>
        $('nav div ul li').mouseover(function(){
            $('nav div ul li a').css("color","white");
        })
        jQuery(function($) {
        var path = window.location.href;
        $('nav div ul div li').each(function() {
        if (this.href === path) {
        $(this).addClass('active');
        }
        });
        });
   </script>
@endsection