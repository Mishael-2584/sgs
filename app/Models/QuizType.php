<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizType extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='quiz_types';

    function quiz()
    {
        return $this->belongsTo('App\Models\Quiz','quiz_type_id');
    }
}
