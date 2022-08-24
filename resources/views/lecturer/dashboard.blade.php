@extends('layouts.body')

@section('title', 'Dashboard')




@section('content')
 <div class="wrapper wrapper-content">
    <div class="row">

        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary float-right"><i class="fa fa-file-o"></i></span>
                    <h2>&nbsp; WELCOME TO SGS!!</h2>
                </div>
                <div class="ibox-content">
                    <span>You Have </span>
                    @isset($student)
                    @if ($student)
                    <h1 class="no-margins">{{count($student)}}</h1>
                    @else
                    <h1 class="no-margins">0</h1>
                    @endif
                    @endisset
                    <small>STUDENTS</small>

                </div>
            </div>
        </div>
        
    </div>
                    
</div>

@endsection
