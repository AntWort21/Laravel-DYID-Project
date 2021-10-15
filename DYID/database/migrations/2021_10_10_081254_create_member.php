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
            $table->id('memberId');
            $table->string('memberName');
            $table->unsignedBigInteger('genderId');
            $table->foreign('genderId')->references('genderId')->on('gender')->onUpdate('cascade')->onDelete('cascade');
            $table->string('memberAddress');
            $table->string('memberEmail');
            $table->string('memberPass');
            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('roleId')->on('role')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('member');
    }
}
