@extends('layouts.body')

@section('title', 'Add Course')
    
@section('content')

<div class="col-lg-6">
    <div class="wrapper wrapper-content">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Add Courses <small>Course code, title, session</small></h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <form method="POST" action="{{route('lecturer-submit-course')}}">
                @csrf
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Course Code</label>
                    <div class="col-sm-10"><input type="text" name="code" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Course Title</label>
                    <div class="col-sm-10"><input type="text" name="title" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Session</label>
                    <div class="col-sm-10"><input type="text" name="session" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row">
        
                        <button class="btn btn-white btn-sm">Cancel</button>
                        <button class="btn btn-primary btn-sm" type="submit">Add Course</button>
                    
                </div>
               
            </form>
        </div>
    </div>
</div>
</div>
    
@endsection