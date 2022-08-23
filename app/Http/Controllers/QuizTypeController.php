<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizType;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;

class QuizTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addquiz(Request $request){
        $saved = QuizType::create([
                    'title' => $request->title,
                    'quiz_out_of' => intval($request->outof),
                ]);
        if($saved){
            $quiz_type = QuizType::where('title', $request->title)->get('id')->first();
            // $quiz = Quiz::all();
            $students = Student::all();
            // dd($students);
            foreach ($students as $student) {
                

                
                $score_id = Score::where('student_id', $student->id)->get('id')->first();
                // dd($score_id->id);
                Quiz::create([
                'quiz_type_id' => $quiz_type->id,
                'student_id' => $student->id,
                'score_id' => $score_id->id,
            ]);
            }
            return back()->with('success', 'Quiz Added Successfully!!');
            

        }

        else{
            return back()->with('error', 'Quiz has failed to be added!!');
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
     * @param  \App\Models\QuizType  $quizType
     * @return \Illuminate\Http\Response
     */
    public function show(QuizType $quizType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizType  $quizType
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizType $quizType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuizType  $quizType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuizType $quizType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizType  $quizType
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizType $quizType)
    {
        //
    }
}
