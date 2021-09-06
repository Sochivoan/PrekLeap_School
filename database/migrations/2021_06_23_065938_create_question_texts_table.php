<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_texts', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->bigInteger('qc_id')->unsigned();
            $table->timestamps();
            $table->foreign('qc_id')->references('id')->on('question_classworks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_texts');
    }
}
