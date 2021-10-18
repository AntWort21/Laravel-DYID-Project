<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('gender_id')->on('genders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('address');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('role_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
