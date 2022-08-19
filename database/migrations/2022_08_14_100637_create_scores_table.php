<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->decimal('attendace')->nullable();
            $table->decimal('assignments')->nullable();
            $table->decimal('quiz')->nullable();
            $table->decimal('mid_semester')->nullable();
            $table->decimal('final_exam')->nullable();
            $table->decimal('total_grade')->nullable();
            $table->string('letter_grade')->nullable();


            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
