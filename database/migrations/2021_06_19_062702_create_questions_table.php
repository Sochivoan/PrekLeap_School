<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_classworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('instruction');
            $table->string('score');
            $table->date('due_date');
            $table->bigInteger('c_id')->unsigned();
            $table->timestamps();
            $table->foreign('c_id')->references('id')->on('classrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
