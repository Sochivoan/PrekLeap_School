<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_registers', function (Blueprint $table) {
            $table->id();
            $table->text('first_name',100);
            $table->text('last_name',100);
            $table->text('email');
            $table->text('user_type');
            $table->text('password');
            $table->text('password_confirm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_registers');
    }
}
