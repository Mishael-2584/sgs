<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('lecturers')->insert(['name' => 'Lecturer1', 'email' => 'mishaelgebre@gmail.com', 'password' => Hash::make('12345678')]);
        DB::table('lecturers')->insert(['name' => 'Lecturer1', 'email' => 'mishaelgebre@gmail.com', 'password' => Hash::make('12345678')]);

    }
}
