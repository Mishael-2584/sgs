 
@extends('auth_layouts.app')
@section('content') 
 <div class="middle-box text-center loginscreen animated fadeInDown">
     <style>
         .b-bg {
             background-color:#004282;
         }
         .white-text{
            color:#ffffff;
            font-weight: 800;
         }
         .gold-text{
            color:#b98d3d;
         }
            .gold-text-login{
            color:#b98d3d;
            font-size:28px;
            font-weight: 700;
         }
         .btn-white {
             color:#004282;
             background: #ffffff;
             font-weight: bold; 
             border-radius: 20px;
         }
         .btn-white:hover{
            background-color: #b98d3d;
            color:#ffffff;
            transition: ease-in 1.1s;
         }
         .forgot-password, a:link{
             color: #b98d3d;
             font-size: 16px;
         }
     .forgot-password:hover{
         color: white;
         background-color: #b98d3d;
         transition: ease-in 1s;
     }
     .forgot-password small{
        border: solid 1px #b98d3d;     
        padding: .1rem 1rem;
     }
     .form-control{
        border-radius: 20px;
        /* margin-left: 10px; */
     }
     .form-group input{
        position: relative;
        padding-left: 2rem;
     }
     .logg{
        font-size: 15px;
     }
     </style>

     @include('layouts.error')
        <div>
            <div>

                {{-- <h1 class="logo-name">PMS</h1> --}}
                  <h1 class="logo-name"><img src="{{asset('BU_logo.png')}}" alt="" style="width: 300px;"></h1>

            </div>
            <h2 class="white-text">SEMESTER GRADING SYSTEM</h2>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <h2 class="gold-text-login">LOGIN</h2>
            <form class="m-t" method="POST" action="{{route('auth')}}">
                 @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-white block full-width m-b logg">LOGIN</button>
                {{-- <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a> --}}

                <a class="forgot-password" href="#"><small>Forgot password?</small></a>
                <p class="text-center white-text"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{route('signup')}}">Create an account</a>
            </form>
            <p class="m-t white-text"> <small>SGS &copy; <?php echo date("Y"); ?></small> </p>
        </div>
    </div>
    @endsection