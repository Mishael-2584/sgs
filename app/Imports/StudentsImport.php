<?php

namespace App\Imports;

use App\Models\Score;


use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;




class StudentsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    
    //             if (!isset($row[0])) {
    //                 return null;
    //             }

    //             return new Student([
    //                 'name' => $row[0],
    //                 'matric_no' => $row[1],
    //             ]);

            
            
    // }

    public function collection(Collection $rows)
    {
         Validator::make($rows->toArray(), [
             '*.name' => 'required',
             '*.matric_no' => 'required|unique:students,matric_no|min:7|max:8',
             '*group' => 'required',

         ])->validate();
  
        foreach ($rows as $row) {
            Student::create([
                'name' => $row['name'],
                'matric_no' => $row['matric_no'],
                'group' => $row['group'],
                
            ]);
            $studentid = Student::where('matric_no', $row['matric_no'])->get('id')->first();
            
            Score::create([
                'student_id' => $studentid->id,
            ]);
            // Score::where('student_id', $studentid->id)->update(array('course_id' => $studentid->id));
        }
    }
}
