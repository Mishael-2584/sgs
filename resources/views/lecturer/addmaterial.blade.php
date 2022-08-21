@extends('layouts.body')
@section('content')

@section('header')
<link href="{{ asset('/css/my_style.css') }}" rel="stylesheet">
@endsection
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>View Students Results</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('lecturer-dashboard')}}">Lecturer</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>View Students Results</strong>
                        </li>
                    </ol>
                </div>
            </div>
 
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                               <ul class="nav nav-tabs">
                                <li class="text-color"><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-plus"></i>ADD NEW QUIZ</a></li>
                                <li><a class="text-color" data-toggle="tab" href="#tab-2"><i class="fa fa-address-book"></i>ADD NEW ASSIGNMENTS</a></li>
                               </ul>
                           <div class="tab-content">
							  <div id="tab-1" class="tab-pane active">
                            <div class="ibox-content">
                                <form method="POST" action="{{route('lecturer-add-quiz')}}">
                                    @csrf
                                    <div class="form-group  row">
                                        <label class="col-sm-2 col-form-label">Title / Description </label>
                                        <div class="col-sm-10"><input type="text" placeholder="Enter the title for the given quiz" name="title" class="form-control"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row">
                                        <label class="col-sm-2 col-form-label">Quiz Out Of</label>
                                        <div class="col-sm-10"><input type="text" placeholder="Enter the total mark of the Quiz" name="outof" class="form-control"></div>
                                    </div>
                                    <div class="form-group row">
                        
                            
                                        <button class="btn btn-white btn-sm">Cancel</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                                    
                                </div>       
                                
                                </form>
							 </div>
                
                            </div>
                           
                    
                <div id="tab-2" class="tab-pane">
                  <div class="ibox">
                    <div class="ibox-content">  
                        <form method="POST" action="{{route('lecturer-add-assignment')}}">
                            @csrf
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Title / Description </label>
                                <div class="col-sm-10"><input type="text" placeholder="Enter the title for the given Assignment" name="title" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Assignment Out Of</label>
                                <div class="col-sm-10"><input type="text" placeholder="Enter the total mark of the Assignment" name="outof" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                
                    
                                <button class="btn btn-white btn-sm">Cancel</button>
                                <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                            
                        </div>       
                        
                        </form>
                    </div>
                                  </div>
                              </div>
                </div>
              </div>
            </div>
        </div>
        </div>
    </div>




@endsection