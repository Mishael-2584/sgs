<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='assignments';

    function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    function assignment_type()
    {
        return $this->belongsTo('App\Models\AssignmentType','assignment_type_id');
    }
}
