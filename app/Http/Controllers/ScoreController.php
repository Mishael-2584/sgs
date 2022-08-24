<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\AssignmentType;
use App\Models\Quiz;
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
        $quiz_no = QuizType::all();

        // dd(count($quiz_no));
        if(count($quiz_no)==1){
            
            $quiz_type = QuizType::get()->first();
            
            $quiz_scores = Quiz::where('quiz_type_id', $quiz_type->id)->get()->all();
            
            foreach ($quiz_scores as $qs) {
                $myscore = Score::where('id', $qs->score_id)->get()->first();
                if($qs->grade!=null){
                $myscore->quiz = round($qs->grade/$quiz_type->quiz_out_of*10);
                $myscore->save();
                }
            }



            
        }

        else{

            $quiz_scores = Quiz::all();

            foreach ($quiz_scores as $qz) {
                $qz_scores = Quiz::where('score_id', $qz->score_id)->get()->all();
                $sum = Quiz::where('score_id', $qz->score_id)->sum('grade');
                $out_of = QuizType::all()->sum('quiz_out_of');
                $myscore = Score::where('id', $qz->score_id)->get()->first();
                $average = round(($sum/$out_of)*10);
                $myscore->quiz = $average;
                $myscore->save();
            }
        }

        $ass_scores = Assignment::all();

        foreach ($ass_scores as $as) {
            $as_scores = Assignment::where('score_id', $as->score_id)->get()->all();
            $a_sum = Assignment::where('score_id', $as->score_id)->sum('grade');
            $a_out_of = AssignmentType::all()->sum('assignment_out_of');
            $a_score = Score::where('id', $as->score_id)->get()->first();
            $a_average = round(($a_sum/$a_out_of)*10);
            
            // dd($a_score);
            $a_score->assignments = $a_average;
            $a_score->save();
        }

        if($scores){
            foreach ($scores as $score) {
                $myscores = Score::where('id', $score->id)->get()->first();
                
                $sum = 0;
                $attendace = floatval($score->attendace);
                $assignments = floatval($score->assignments);
                $mid_sem = floatval($score->mid_semester);
                $quiz = floatval($score->quiz);
                $finals = floatval($score->final_exam);
                
                $sum += round($attendace + $assignments + $quiz + $mid_sem + $finals);
                // dd($sum);
                
                $myscores->total_grade = $sum;
                if ($sum>=80) {
                    $myscores->letter_grade = 'A';
                }
                elseif($sum>=60){
                    $myscores->letter_grade = 'B';
                }
                elseif($sum>=50){
                    $myscores->letter_grade = 'C';
                }
                elseif($sum>=45){
                    $myscores->letter_grade = 'D';
                }
                elseif($sum>=40){
                    $myscores->letter_grade = 'E';
                }
                elseif($sum>=0){
                    $myscores->letter_grade = 'F';
                }

                $myscores->save();
                
                
                
                
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
                $sum += round(($attendace + $assignments + $quiz + $mid_sem + $finals));
                
                $score->total_grade = $sum;
                $score->save();
                
                
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
            return redirect()->route('lecturer-allresults')->with('success', 'Scores have been updated successfully!!!');
        }

        else{
            return redirect()->route('lecturer-allresults')->with('error', 'Scores have failed to be updated successfully!!!');
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
