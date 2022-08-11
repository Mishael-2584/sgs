<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header"> 
                <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{asset('BU_logo.png')}}"alt="BU logo" style="width: 180px;"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            {{-- <span class="block m-t-xs font-bold">{{ucwords(session()->get('staff_name'))}}</span> --}}
                            {{-- @if(Session::get('authenticated')==true && Session::get('role')==1)
                            <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('id')==1)
                            <span class="text-muted text-xs block">Bursar <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('id')==3)
                            <span class="text-muted text-xs block">Deputy Bursar <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==3)
                            <span class="text-muted text-xs block">SPS <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==4)
                            <span class="text-muted text-xs block">BCO <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==5)
                            <span class="text-muted text-xs block">Cashier <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==6)
                            <span class="text-muted text-xs block">Internal Audit <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==7)
                            <span class="text-muted text-xs block">SPS - Lodge cheque <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==8)
                            <span class="text-muted text-xs block">SPS - Draw funds <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==9)
                            <span class="text-muted text-xs block">SPS - Distribute <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==10)
                            <span class="text-muted text-xs block">SPS - Transaction complete <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==11)
                            <span class="text-muted text-xs block">HOD <b class="caret"></b></span>
                            @elseif(Session::get('authenticated')==true && Session::get('role')==12)
                            <span class="text-muted text-xs block">Staff <b class="caret"></b></span>
                            @endif --}}

                            
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                <div class="logo-element">
                    SGS
                </div>
            </li>

            {{-- @if (Session::get('authenticated')==true && Session::get('role')==1)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-building"></i> <span class="nav-label">Vendors</span> </a>
            </li>
            <li class="#">
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Staff</span></a>
            </li>
            <li class="#">
                <a href="#"><i class="fa fa-eye"></i> <span class="nav-label">All Requests</span></a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-users"></i> <span class="nav-label">User management</span> </a>
            </li>

            @elseif(Session::get('authenticated')==true && Session::get('role')==2)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-building"></i> <span class="nav-label">Vendors</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-circle-o-notch"></i> <span class="nav-label">Pending Initial Endorsements</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Approval</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-check-square-o "></i> <span class="nav-label">Approved Request</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>

            @elseif(Session::get('authenticated')==true && Session::get('role')==3)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-building"></i> <span class="nav-label">Vendors</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-circle-o-notch"></i> <span class="nav-label">Request for Quotation</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Approval</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-check-square-o "></i> <span class="nav-label">Approved Request</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Completed Transaction</span> </a>
            </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==4)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Approved Request</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
            <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==5)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
                <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Cheque</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Issued Cheque</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
                <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==6)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Approved Request</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==7)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Cheque</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Lodged Cheque</span> </a>
            </li>
             <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==8)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Approved Request</span> </a>
            </li>
                         <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==9)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Completed Request</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==10)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
               <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Approved Request</span> </a>
            </li>
                        <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==11)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
                      <li class="">
                <a href=""><i class="fa fa-check-square-o"></i> <span class="nav-label">Approved Request</span> </a>
            </li>
                          <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
             <li class="special_link">
                    <a href=""><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span></a>
                </li>
            @elseif(Session::get('authenticated')==true && Session::get('role')==12)
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li class="">
                <a href="{{route('staff-create-request')}}"><i class="fa fa-plus"></i> <span class="nav-label">Create Request</span> </a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-spinner"></i> <span class="nav-label">Pending Request</span> </a>
            </li>
                          <li class="">
                <a href=""><i class="fa fa-tasks"></i> <span class="nav-label">Complete Transaction</span> </a>
            </li>
            @endif --}}

            {{-- <li class="">
                <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">Requistions</span></a>
            </li>
            <li class="">
                <a href=""><i class="fa fa-file"></i> <span class="nav-label">Purchase Orders</span> </a>
            </li> --}}
            
        </ul>

    </div>
</nav>
