@extends('layouts.body')

@section('title', 'Quiz Results')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">
                            <strong>@isset($quiz_title)
                                <th><h2>{{$quiz_title->title}}</h2></th>  
                                @endisset</strong>
                        </li>
                    </ol>
                </div>
            </div>
 <div class="wrapper wrapper-content">
    <div class="ibox">
        <div class="ibox-content">  
          <div class="row">
            <div class="col-lg-12">
               <div class="wrapper wrapper-content animated fadeInUp">
                 <div class="ibox">
                    <div class="text-color">                   
                          <div class="ibox-tools">
                              @isset($students)
                              <p  class="btn btn-primary btn-xs">Found {{count($students)}} Students</p>   
                              @endisset
                          </div>
                  </div>
                  <div class="ibox-content">
                      <div class="row m-b-sm m-t-sm">
                          <div class="col-md-1">
                              {{-- <a href="{{ route('lecturer-quiz-result', $quiz_title->id)}}" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh</a> --}}
                      </div>
                  </div>
           <div class="table-responsive">
             <div class="table-responsive">
                 <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead class="table-color">
                          <tr>
                              <th>Matric Number</th>
                              <th>Full Name</th>
                              <th>Quiz Score</th>
                              <th>Quiz Total</th>
                              <th></th>
                          </tr>
                      </thead>
                       <tbody>
                      @isset($students)
                      @foreach ($students as $student)
                      <tr class="gradeX">
                          <td>{{$student->student->matric_no}}</td>
                          <td>{{$student->student->name}}</td>  
                          <td>{{$student->grade}}</td>  
                          <td>
                            @php
                                echo(intval($student->quiz_type->quiz_out_of));
                            @endphp
                          </td>           
                          <td class="project-actions"><a href="{{ route('lecturer-quiz-grade', $student->id)}}"><i class="fa fa-arrow-right"></i>View</a></td>           
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
