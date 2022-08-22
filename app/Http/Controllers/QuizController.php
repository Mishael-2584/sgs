<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizType;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function quizresult($id){
        $students = Quiz::where('quiz_type_id', $id)->get()->all();
        $quiz_title = QuizType::where('id',$id)->get('title')->first();
        
        foreach ($students as $value) {
            // dd($value->id);
        }
        return view('lecturer.quizresult', compact('students', 'quiz_title'));
    }

    public function submit_quiz_result(Request $request, $id)
    {
        $quiz_score = Quiz::where('id', $id)->get()->first();
        $quiz_score->grade = $request->score;
        $saved = $quiz_score->save();
        if ($saved){
            return back()->with('success', 'Quiz has been uploaded successfully!!');
        }
        else{
            return back()->with('error', 'Quiz has failed to be uploaded!!');
        }
    }

    public function quizgrade($id){
        $quiz = Quiz::where('id', $id)->get()->first();
        return view('lecturer.quizgrade', compact('quiz'));
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
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
