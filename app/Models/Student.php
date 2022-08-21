<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='students';

    function assignment()
    {
        return $this->belongsTo('App\Models\Assignment','assignment_type_id');
    }

    function quiz()
    {
        return $this->belongsTo('App\Models\Quiz','student_id');
    }
    
}
