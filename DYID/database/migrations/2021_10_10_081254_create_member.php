<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('memberId');
            $table->string('memberName');
            $table->integer('genderId'); $table->foreign('genderId')->references('genderId')->on('gender')->onUpdate('cascade')->onDelete('cascade');
            $table->string('memberAddress');
            $table->string('memberEmail');
            $table->string('memberPass');
            $table->integer('roleId'); $table->foreign('roleId')->references('roleId')->on('role')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
