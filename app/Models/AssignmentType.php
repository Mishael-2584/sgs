<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentType extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='assignment_types';

    function assignment()
    {
        return $this->belongsTo('App\Models\Assignment','assignment_type_id');
    }
    
}
