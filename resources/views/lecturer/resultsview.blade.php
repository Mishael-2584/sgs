@extends('layouts.body')

@section('title', 'Dashboard')

@section('content')
 <div class="wrapper wrapper-content">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Correctly fill in student details</h5>
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
            @isset($score)
            <form method="POST" action="{{route('lecturer-submit-result', $score->student_id)}}">
                @csrf
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Matric Number</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->student->matric_no}}" name="matric_no" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Name</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->student->name}}" name="name" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Attendance</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->attendace}}" name="attendance" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Assignments</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->assignments}}" name="assignments" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Quiz / Quiz Average</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->quiz}}" name="quiz" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Mid-Semester</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->mid_semester}}" name="midsem" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Final Exam</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->final_exam}}" name="final" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Total Grade</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->total_grade}}" name="total_grade" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Letter Grade</label>
                    <div class="col-sm-10"><input type="text" value="{{$score->letter_grade}}" name="letter_grade" class="form-control" disabled></div>
                </div>

                <div class="form-group row">
    
        
                    <button class="btn btn-white btn-sm">Cancel</button>
                    <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
                
            </div>
                  
                @endisset

                
                
               
            </form>
        </div>
    </div>
                    
</div>

@endsection
