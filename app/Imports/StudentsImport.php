<?php

namespace App\Imports;

use App\Models\Score;
use App\Http\Controllers\StudentController;


use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;






class StudentsImport extends StudentController implements ToCollection, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection(Collection $rows)
    {
         Validator::make($rows->toArray(), [
             '*.name' => 'required',
             '*.matric_no' => 'required|unique:students,matric_no|min:7|max:8',
             '*group' => 'required||unique:students,group',

         ])->validate();
            
        foreach ($rows as $row) {
            // dd($row);
            $created = Student::create([
                'name' => $row['name'],
                'matric_no' => $row['matric_no'],
                

                
            ]);
            $studentid = Student::where('matric_no', $row['matric_no'])->get('id')->first();
            
            if($created){
                Score::create([
                    'student_id' => $studentid->id,
                ]);
            }
            
            
        }
    }
}
