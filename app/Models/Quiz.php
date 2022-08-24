<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='quizzes';

    function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    function quiz_type()
    {
        return $this->belongsTo('App\Models\QuizType','quiz_type_id');
    }

    function score()
    {
        return $this->belongsTo('App\Models\Score','score_id');
    }
}
