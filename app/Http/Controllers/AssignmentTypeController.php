<?php

namespace App\Http\Controllers;

use App\Models\AssignmentType;
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
