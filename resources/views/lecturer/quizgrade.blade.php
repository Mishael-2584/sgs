@extends('layouts.body')

@section('title', 'Dashboard')

@section('content')
 <div class="wrapper wrapper-content">
    <div class="ibox ">
        <div class="ibox-content">
            @isset($quiz)
            <form method="POST" action="{{route('lecturer-submit-quiz_result', $quiz->id)}}">
                @csrf
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Matric Number</label>
                    <div class="col-sm-10"><input type="text" value="{{$quiz->student->matric_no}}" name="matric_no" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Name</label>
                    <div class="col-sm-10"><input type="text" value="{{$quiz->student->name}}" name="name" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Quiz Score</label>
                    <div class="col-sm-10"><input type="text" value="{{$quiz->grade}}" name="score" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Quiz Out Of (%)</label>
                    <div class="col-sm-10"><input type="text" value="{{$quiz->quiz_type->quiz_out_of}}" name="out_of" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
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
