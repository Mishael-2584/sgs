 
@extends('auth_layouts.app')
@section('content') 
 <div class="middle-box text-center loginscreen animated fadeInDown">
     <style>
         .b-bg {
             background-color:#004282;
         }
         .text{
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
            color: #b98d3d;
            transition: ease-in 1s;
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
            <h2 class="text">SEMESTER GRADING SYSTEM</h2>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p class="gold-text-login">SIGN UP</p>
            <form class="m-t" method="POST" action="{{route('register')}}">
                 @csrf
                 <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-white block full-width m-b logg">SIGN UP</button>
                {{-- <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a> --}}

                <p class="text-center white-text"><small>Do you want to Login instead?</small></p>
                <a class="btn btn-sm btn-white btn-block m-b" href="{{route('login')}}">LOGIN</a>
            </form>
            {{-- <p class="m-t white-text"> <small>SGS &copy; <?php echo date("Y"); ?></small> </p> --}}
        </div>
    </div>
    <style>
        @media (max-width:768px) {
              .b-bg {
              background-color:#004282;
          }
              .text{
                  color:#004282;!important
                  font-weight: 800;
              }
              .gold-text{
                  color:#004282;
              }
                  .gold-text-login{
                  color:#004282;
                  font-size:28px;
                  font-weight: 700;
              }
              .btn-white {
                  color:#e6eaee;
                  background: #004282;
                  font-weight: bold; 
                  border-radius: 20px;
              }
              .btn-white:hover{
                  background-color: #040404;
                  color:#ffffff;
                  transition: ease-in 1.1s;
              }
              .forgot-password, a:link{
                  color: #004282;
                  font-size: 16px;
              }
              .forgot-password:hover{
                  color: white;
                  background-color: #004282;
                  transition: ease-in 1s;
              }
              .forgot-password small{
                  border: solid 1px #004282;     
                  padding: .1rem 1rem;
              }
                  }
</style>
    @endsection
