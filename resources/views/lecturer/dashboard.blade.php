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
                    <h1 class="no-margins">22 285,400</h1>
                    <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
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
                    <h1 class="no-margins">60 420,600</h1>
                    <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
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
                    <h1 class="no-margins">$ 120 430,800</h1>
                    <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
    </div>
                    
</div>

@endsection
