<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="/">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search" />
                </div>
            </form>
        </div>

      <ul class="nav navbar-top-links navbar-right nav-size">

        <li class="dropdown">
 	   {{-- @if (Session::get('isAuthenticated')==true && Session::get('privilege')==2) --}}
             <!-- new notifiaction starts here -->
            {{-- <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <?php $complaints=[];
                        if(Cache::has('complaints'))
                        {
                            $complaints=Cache::get('complaints');
                        }
                        ?>
                        <i class="fa fa-bell"></i>  <span class="label label-primary">{{$complaints!=null?$complaints->count():0}}</span>
                    </a>
	               <ul class="dropdown-menu dropdown-alerts">
                    {{-- @foreach ($complaints as $c)
                        <li>
                            <a href="{{ route('staff-complaint',$c->id)}}" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> {{$c->message}}
                                    <span class="float-right text-muted small">{{$c->created_at->diffforHumans()}}</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        @endforeach --}}
                      {{-- </ul> --}}
	                {{-- </li> --}} 

                <!-- new notification ends here -->
              {{-- @endif --}}

            <li>
                <a href="{{route('logout')}}">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>




    </nav>
</div>

<style>
  .menu{
      padding: 3px 1px 100px 2px;
  }

  .text{
    text-transform:capitalize;
    font-weight:bold;

  }

  .text-style{
    text-align:center;
  }



  </style>
