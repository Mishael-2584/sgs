@extends('layouts.app')
@section('body')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
<script>
    // $( document ).ready(function() {
    //     console.log( "document loaded" );
    // });

    // $( window ).on( "load", function() {
    //     $("body").css("background","blue")
    //     setTimeout(()=>{
    //         $("body").css("background","grey")
    //             console.log("remove bg")
    //     }, 3)
    // });
</script>
        
<!-- Wrapper-->
<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Page wrapper -->
        @include('layouts.topnavbar')

        @include('layouts.error')
        
        <!-- Main view  -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
@if(isset($js) && ! empty($js))
@foreach($js as $js_files)
 <script src="{!! asset($js_files) !!}" type="text/javascript"></script>
@endforeach
@endif  

@section('scripts')
@show
@endsection
