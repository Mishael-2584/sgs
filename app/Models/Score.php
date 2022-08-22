<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='scores';

    function assignment()
    {
        return $this->belongsTo('App\Models\Assignment','score_id');
    }

    function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    function quiz()
    {
        return $this->belongsTo('App\Models\Quiz','score_id');
    }
}
