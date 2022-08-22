<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\AssignmentType;
use App\Models\Quiz;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function assignmentresult($id)
    {
        $students = Assignment::where('assignment_type_id', $id)->get()->all();
        $assignment_title = AssignmentType::where('id',$id)->get('title')->first();
        
        
        return view('lecturer.assignmentresult', compact('students', 'assignment_title'));
        
    }

    public function submit_assignment_result(Request $request, $id)
    {
        $assignment_score = Assignment::where('id', $id)->get()->first();
        $assignment_score->grade = $request->score;
        $saved = $assignment_score->save();
        if ($saved){
            return back()->with('success', 'Assignment has been uploaded successfully!!');
        }
        else{
            return back()->with('error', 'Assignment has failed to be uploaded!!');
        }
    }

    public function assignmentgrade($id)
    {
        $assignment = Assignment::where('id', $id)->get()->first();
        return view('lecturer.assignmentgrade', compact('assignment'));
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
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
