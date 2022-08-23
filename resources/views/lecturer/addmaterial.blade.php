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
                        <li class="breadcrumb-item">
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
                                <li class="text-color"><a class="nav-link" data-toggle="tab" href="#tab-1"><i class="fa fa-plus"></i>ADD NEW QUIZ</a></li>
                                <li class="text-color"><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-file"></i>VIEW CURRENT QUIZZES</a></li>
                                <li><a class="text-color" data-toggle="tab" href="#tab-3"><i class="fa fa-plus"></i>ADD NEW ASSIGNMENTS</a></li>
                                <li class="text-color"><a class="nav-link " data-toggle="tab" href="#tab-4"><i class="fa fa-file "></i>VIEW CURRENT ASSIGNMENTS</a></li>
                               <ul class="nav nav-tabs" id="onclik">
                                <li class="text-color clickd"><a class="nav-link cliks" data-toggle="tab" href="#tab-1"><i class="fa fa-plus"></i>ADD NEW QUIZ</a></li>
                                {{-- <li class="ssd"><a class="nav-link text-color clikk" data-toggle="tab" href="#tab-2"><i class="fa fa-address-book"></i>ADD NEW ASSIGNMENTS</a></li> --}}
                               </ul>
                               {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" /> --}}
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.js"></script>
                               <script>
                                $(document).ready(function(){
                                    var ssd = $("a.active")
                                    $(".clik").click(function(){
                                        if (!ssd.hasClass("active")){
                                            $(".clikk").addClass("a.active")
                                        }else{
                                            $(".cliks").addClass("active")
                                        }
                                    })})
                                    // $(".clikk").click(function(){
                                    //     if($(".clikd") hasClass("active")){
                                    //         $(".clikk").removeClass("active")
                                    //         $(".cliks").addClass("active")
                                    //     }else{
                                    //         $(".cliks").addClass("active")
                                    //     }
                                    // })
                               </script>
                           <div class="tab-content">
							  <div id="tab-1" class="tab-pane">
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
                                    <div class="ibox-content forum-container">
                                        <div class="forum-item">
                                            @isset($quiztypes)
                                            @foreach ($quiztypes as $quiz_type)
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="forum-icon">
                                                        <i class="fa fa-file"></i>
                                                    </div>
                                                    <a href="#" class="forum-item-title">{{$quiz_type->title}}</a>
                                                </div>
                                                <div class="col-md-1 forum-info">
                                                    <div>
                                                        <small>Out Of</small>
                                                    </div>
                                                    <span class="views-number">
                                                        @php
                                                            echo(intval($quiz_type->quiz_out_of))
                                                        @endphp
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                                
                                            @endforeach
                                            @endisset
                                            
                                        </div>
                                    </div>
                                                </div>
                                            </div>
                           
                    
                <div id="tab-3" class="tab-pane">
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
                              <div id="tab-4" class="tab-pane">
                                <div class="ibox">
                                    <div class="ibox-content forum-container">
                                        <div class="forum-item">
                                            @isset($assignmenttypes)
                                            @foreach ($assignmenttypes as $ass_type)
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="forum-icon">
                                                        <i class="fa fa-file"></i>
                                                    </div>
                                                    <a href="#" class="forum-item-title">{{$ass_type->title}}</a>
                                                </div>
                                                <div class="col-md-1 forum-info">
                                                    <div>
                                                        <small>Out Of</small>
                                                    </div>
                                                    <span class="views-number">
                                                        @php
                                                            echo(intval($ass_type->assignment_out_of))
                                                        @endphp
                                                    </span>
                                                    
                                                </div>
                                            </div> 
                                            @endforeach
                                            @endisset
                                        </div>
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