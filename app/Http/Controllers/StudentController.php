<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Input\Input;









class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function importUsers()
    {
        return view('lecturer.studentupload');
    }

    public function uploadUsers(Request $request, Score $score)
    {
            

            
            $filename = $request->import->getClientOriginalName(); // original name that it was uploaded with
            $fileInfo = pathinfo('import');
            $destinationPath = 'uploads/';
            $move1 = $request->import->move($destinationPath,$filename);
    
            $filepath = $destinationPath.''.$filename;
            
            
            
        $import = Excel::import(new StudentsImport, $filepath);
        
        if($import){

            $students = Student::all();

            foreach ($students as $student) {

                $student->group = $request->group;
                $student->save();
            }


            return back()->with('success', 'Import Successful!');

        }
        else{
            return back()->with('warning', 'Import Failed!');
        }

        
    }
    
    public function export()
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
