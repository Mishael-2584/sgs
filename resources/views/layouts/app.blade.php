<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site_url" content="{{url('')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title> {{"Semester Grading System "}} - @yield('title') </title>

    <link rel="shortcut icon" type="image/png" href="{{ asset ('image/main_logo.png') }}">

    {{-- <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" /> --}}
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('font-awesome/css/font-awesome.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/modal-css.css') !!}" />
    
    @yield('header')
  

    @if(isset($css) && ! empty($css))

      @foreach($css as $css_files)
      
    <link rel="stylesheet" href="{!! asset($css_files) !!}" />
      @endforeach
    @endif



</head>
<body>
      <div class="ssh">
        <style>
          @media (max-width:768px) {
                head{
                    background-color: brown;!important
                }
            }
        </style>
      </div>
 @yield('body')


</body>
</html>
