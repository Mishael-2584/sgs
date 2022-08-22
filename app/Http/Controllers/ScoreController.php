<?php

namespace App\Http\Controllers;

use App\Models\AssignmentType;
use App\Models\QuizType;
use App\Models\Score;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allresults()
    {
        $scores = Score::all();

        if($scores){
            foreach ($scores as $score) {
                $myscores = Score::where('id', $score->id)->get()->first();
                
                $sum = 0;
                $attendace = floatval($score->attendace);
                $assignments = floatval($score->assignments);
                $mid_sem = floatval($score->mid_semester);
                $quiz = floatval($score->quiz);
                $finals = floatval($score->final_exam);
                $sum += ceil($attendace + $assignments + $quiz + $mid_sem + $finals);
                
                if($sum!=null){
                $myscores->total_grade = $sum;
                $myscores->save();
                }
                
                
                
            }
           


        }
        
        return view('lecturer.allresults', compact('scores'));
    }

    public function partresults(){
        $quiztypes = QuizType::all();
        $ass_types = AssignmentType::all();
        return view('lecturer.partresults', compact('quiztypes', 'ass_types'));
    }

    public function view_result($id)
    {
        
        $score = Score::where('student_id',$id)->get()->first();
        
                $sum = 0;
                $attendace = floatval($score->attendace);
                $assignments = floatval($score->assignments);
                $mid_sem = floatval($score->mid_semester);
                $quiz = floatval($score->quiz);
                $finals = floatval($score->final_exam);
                $sum += ceil($attendace + $assignments + $quiz + $mid_sem + $finals);
                
                if($sum!=null){
                $score->total_grade = $sum;
                $score->save();
                }
                
        return view('lecturer.resultsview', compact('score'));
    }

    public function submit_result(Request $request, $id){
        $score = Score::where('student_id', $id)->get()->first();
        $score->attendace = $request->attendance;
        $score->assignments = $request->assignments;
        $score->quiz = $request->quiz;
        $score->mid_semester = $request->midsem;
        $score->final_exam = $request->final;
        $score->total_grade = $request->total_grade;
        $score->letter_grade = $request->letter_grade;
        $saved = $score->save();

        if ($saved){
            return back()->with('success', 'Scores have been updated successfully!!!');
        }

        else{
            return back()->with('danger', 'Scores have failed to be updated successfully!!!');
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
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
