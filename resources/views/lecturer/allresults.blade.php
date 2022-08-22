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
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-address-book"></i> View Results</a></li>
                               </ul>
                           <div class="tab-content">
							  
                    
            <div id="tab-1" class="tab-pane">
                <div class="ibox">
                  <div class="ibox-content">  
                    <div class="row">
                      <div class="col-lg-12">
                         <div class="wrapper wrapper-content animated fadeInUp">
                           <div class="ibox">
                              <div class="text-color">
                                 <h3>All Students</h3>
                                    <div class="ibox-tools">
                                    <p  class="btn btn-primary btn-xs">Found {{count($scores)}} Students</p>
                                    </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row m-b-sm m-t-sm">
                                    <div class="col-md-1">
                                        <a href="{{ route('lecturer-allresults')}}" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
                                </div>
                            </div>
                     <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead class="table-color">
                                    <tr>
                                        <th>Matric Number</th>
                                        <th>Student Name</th>
                                        <th>Attendance</th>
                                        <th>Assignments</th>
                                        <th>Quiz</th>
                                        <th>Mid Semester</th>
                                        <th>FinaL Exam</th>
                                        <th>Total Grade</th>
                                        <th>Letter Grade</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                 <tbody>
                                @foreach ($scores as $score )
                                    <tr class="gradeX">
                                        <td>{{$score->student->matric_no}}</td>
                                        <td>{{$score->student->name}}</td>
                                        <td>{{$score->attendace}}</td>
                                        <td>{{$score->assignments}}</td>
                                        <td class="text-center">{{$score->quiz}}</td>
                                        <td class="text-center">{{$score->mid_semester}}</td>
                                        <td class="text-center">{{$score->final_exam}}</td>
                                        <td class="text-center">
                                            @php
                                             echo(intval($score->total_grade));
                                            @endphp
                                            
                                        </td>
                                        <td class="text-center">{{$score->letter_grade}}</td>
                                        <td class="project-actions"><a href="{{ route('lecturer-view-result', $score->student->id)}}"><i class="fa fa-arrow-right"></i>View</a></td>                </td>
                                    </tr>
                                  @endforeach
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

