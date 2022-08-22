<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\AssignmentType;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;


class AssignmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addassignment(Request $request){
        $saved = AssignmentType::create([
            'title' => $request->title,
            'assignment_out_of' => $request->outof,
        ]);
if($saved){
    $assignmentType = AssignmentType::where('title', $request->title)->get('id')->first();
            $students = Student::all();
            foreach ($students as $student) {
                $score_id = Score::where('student_id', $student->id)->get('id')->first();
                // dd($score_id);
                Assignment::create([
                'assignment_type_id' => $assignmentType->id,
                'student_id' => $student->id,
                'score_id' => $score_id->id,
            ]);
            }


    return back()->with('success', 'Assignment Added Successfully!!');
}

else{
    return back()->with('error', 'Assignment has failed to be added!!');
}
}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignmentType  $assignmentType
     * @return \Illuminate\Http\Response
     */
    public function show(AssignmentType $assignmentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignmentType  $assignmentType
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignmentType $assignmentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssignmentType  $assignmentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignmentType $assignmentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignmentType  $assignmentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignmentType $assignmentType)
    {
        //
    }
}
