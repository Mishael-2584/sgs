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
                                <li class="text-color"><a class="nav-link" data-toggle="tab" href="#tab-1"><i class="fa fa-plus"></i>QUIZZES</a></li>
                                <li><a class="text-color" data-toggle="tab" href="#tab-2"><i class="fa fa-address-book"></i>ASSIGNMENTS</a></li>
                               </ul>
                           <div class="tab-content">
							  <div id="tab-1" class="tab-pane active">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           <div class="wrapper wrapper-content animated fadeInUp">
                                             <div class="ibox">
                                                <div class="text-color">
                                                   <h3>All Students</h3>
                                                      <div class="ibox-tools">
                                                        @isset($quiztypes)
                                                        <p  class="btn btn-primary btn-xs">Found {{count($quiztypes)}} Quizzes</p>   
                                                        @endisset
                                                      </div>
                                              </div>
                                              <div class="ibox-content">
                                                  <div class="row m-b-sm m-t-sm">
                                                      <div class="col-md-1">
                                                          <a href="{{ route('lecturer-part-results')}}" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
                                                  </div>
                                              </div>
                                       <div class="table-responsive">
                                         <div class="table-responsive">
                                             <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                  <thead class="table-color">
                                                      <tr>
                                                          <th>Quiz Title</th>
                                                          <th>Out Of (%)</th>
                                                          <th>Action</th>
                                                      </tr>
                                                  </thead>
                                                   <tbody>
                                                    @isset($quiztypes)
                                                    @foreach ($quiztypes as $quiztype)
                                                    <tr class="gradeX">
                                                        <td>{{$quiztype->title}}</td>
                                                        <td>
                                                        @php
                                                            echo(intval($quiztype->quiz_out_of))
                                                        @endphp
                                                        </td>
                                                                     
                                                        <td class="project-actions"><a href="{{ route('lecturer-quiz-result', $quiztype->id)}}"><i class="fa fa-arrow-right"></i>View</a></td>
                                                    </tr>
                                                  @endforeach
                                                
                                                    @endisset
                                                  </tbody>
                                                </table>
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
                
              
                    
  <div id="tab-2" class="tab-pane">
    <div class="ibox">
      <div class="ibox-content">  
        <div class="row">
          <div class="col-lg-12">
             <div class="wrapper wrapper-content animated fadeInUp">
               <div class="ibox">
                  <div class="text-color">                   
                        <div class="ibox-tools">
                            @isset($ass_types)
                            <p  class="btn btn-primary btn-xs">Found {{count($ass_types)}} Assignments</p>   
                            @endisset
                        </div>
                </div>
                <div class="ibox-content">
                    <div class="row m-b-sm m-t-sm">
                        <div class="col-md-1">
                            <a href="{{ route('lecturer-part-results')}}" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
                    </div>
                </div>
         <div class="table-responsive">
           <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead class="table-color">
                        <tr>
                            <th>Assignment Title</th>
                            <th>Out Of (%)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tbody>
                    @isset($ass_types)
                    @foreach ($ass_types as $ass_type)
                    <tr class="gradeX">
                        <td>{{$ass_type->title}}</td>
                        <td>
                            @php
                                echo(intval($ass_type->assignment_out_of));
                            @endphp
                        </td>               
                        <td class="project-actions"><a href="{{ route('lecturer-assignments-result', $ass_type->id)}}"><i class="fa fa-arrow-right"></i>View</a></td>           
                    </tr>
                  @endforeach
                
                    @endisset
                    </tbody>
                  </table>
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
            </div>
                </div>
              </div>
            </div>
        </div>
        </div>
    




@endsection


@section('scripts')
            <script src="{{ asset('js/plugins/dataTables/datatables.min.js')}}"></script>
              <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
                <script>
                    $(document).ready(function(){
                        $('.dataTables-example').DataTable({
                            pageLength: 25,
                            responsive: true,
                            dom: '<"html5buttons"B>lTfgitp',
                            buttons: [
                                { extend: 'copy'},
                                {extend: 'csv'},
                                {extend: 'excel', title: 'ExampleFile'},
                                {extend: 'pdf', title: 'ExampleFile'},

                                {extend: 'print',
                                customize: function (win){
                                        $(win.document.body).addClass('white-bg');
                                        $(win.document.body).css('font-size', '10px');

                                        $(win.document.body).find('table')
                                                .addClass('compact')
                                                .css('font-size', 'inherit');
                                }
                                }
                            ]

                        });

                    });

                </script>

            @endsection

