@extends('layouts.body')

@section('title', 'Dashboard')




@section('content')
 <div class="wrapper wrapper-content">
    <div class="row">

        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary float-right"><i class="fa fa-file-o"></i></span>
                    <h5>&nbsp; CLASS SIZE</h5>
                </div>
                <div class="ibox-content">

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
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-info float-right">Monthly</span>
                    <h5>&nbsp; CLASS AVERAGE GRADE</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">0</h1>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-warning float-right"><i class="fa fa-level-up"></i></span>
                    <h5>&nbsp; GROUPS</h5>
                </div>
                <div class="ibox-content">

                    <h1 class="no-margins">0</h1>
                    
                </div>
            </div>
        </div>
    </div>
                    
</div>

@endsection
