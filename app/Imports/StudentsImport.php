<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;


class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
            try{
                if (!isset($row[0])) {
                    return null;
                }
            
                return new Student([
                    'name' => $row[0],
                    'matric_no' => $row[1],
                ]);
            }
            catch(\Exception $e)
            {
                DB::rollback();
                return back()->withErrors('Could not add user '.$e->getMessage())->withInput();
            }
    }
}
