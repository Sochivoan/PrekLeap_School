<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassworkStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classwork_student', function (Blueprint $table) {
            $table->unsignedBigInteger('classwork_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
            $table->string('given_score')->default('0');
            $table->foreign('classwork_id')->references('id')->on('question_classworks');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classwork_student');
    }
}
