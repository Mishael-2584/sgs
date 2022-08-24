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
<<<<<<< HEAD
                    @isset($student)
                    @if ($student)
                    <h1 class="no-margins">{{count($student)}}</h1>
                    @else
                    <h1 class="no-margins">0</h1>
                    @endif
                    @endisset
                    <small>STUDENTS</small>
=======
                    <h1 class="no-margins">OBJECT</h1>
                    <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                    <small>OOP</small>
>>>>>>> 917b3a512bf9faa552f1fda54d989a38a26305f6
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
<<<<<<< HEAD
                    <h1 class="no-margins">0</h1>
                    
                    
=======
                    <h1 class="no-margins">Object</h1>
                    <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                    <small>OOP</small>
>>>>>>> 917b3a512bf9faa552f1fda54d989a38a26305f6
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
<<<<<<< HEAD
                    <h1 class="no-margins">0</h1>
                    
=======
                    <h1 class="no-margins">Class</h1>
                    <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                    <small>OOP</small>
>>>>>>> 917b3a512bf9faa552f1fda54d989a38a26305f6
                </div>
            </div>
        </div>
    </div>
                    
</div>

@endsection
