@extends('layouts.body')

@section('title', 'Dashboard')

@section('content')
 <div class="wrapper wrapper-content">
    <div class="ibox ">
        <div class="ibox-content">
            @isset($assignment)
            <form method="POST" action="{{route('lecturer-submit-assignment_result', $assignment->id)}}">
                @csrf
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Matric Number</label>
                    <div class="col-sm-10"><input type="text" value="{{$assignment->student->matric_no}}" name="matric_no" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Student's Name</label>
                    <div class="col-sm-10"><input type="text" value="{{$assignment->student->name}}" name="name" class="form-control" disabled></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Assignment Score</label>
                    <div class="col-sm-10"><input type="text" value="{{$assignment->grade}}" name="score" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Assignment Out Of (%)</label>
                    <div class="col-sm-10"><input type="text" value="{{$assignment->assignment_type->assignment_out_of}}" name="out_of" class="form-control" disabled></div>
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
