<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    

    use HasFactory;
    protected $guarded = [];
    protected $table='lecturers';

    public function lecturers()
    {
        return $this->belongsTo(lecturers::class);
    }
}
