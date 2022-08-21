<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;






class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addcourse(){

        return view('lecturer.addcourse');
    }
    
    public function submitcourse(Request $request, Course $course){
        //$course = Course::all();
        $rules=[
            'code'=>'required|unique:courses,course_code',
            'title'=>'required',
            'session'=>'required',
              ];
        $validator=Validator::make($request->all(), $rules);
     if($validator->fails())
        {
            return back()->withErrors($validator->errors('error'));
        }
     else
        {
        $course->course_code = $request->code;
        $course->title = $request->title;
        $course->session = $request->session;
        
        
        
        $course->save();

        if ($course->save()){
            $id = session()->get("id");
            $lecturer = Lecturer::find($id);
            // $mylecturer = Lecturer::where('id',$id)->get()->first();
            $mycourse = Course::where('course_code', $request->code)->get('id')->first();
            // dd($request->code);

            Lecturer::where('id', $id)->update(array('course_id' => $mycourse->id));
            // $lecturer->course_id = $mycourse->course_id;
            // $lecturer->save();
            $request->session()->put('course_id', $mycourse->course_id);
        }

        

        

            return back()->with('success', 'Course created sucessfully');
        }
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
