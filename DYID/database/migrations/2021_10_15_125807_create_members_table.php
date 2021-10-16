<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('memberId');
            $table->string('memberName');
            // $table->string('gender');
            $table->unsignedBigInteger('genderId');
            $table->foreign('genderId')->references('genderId')->on('genders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('memberAddress');
            $table->string('memberEmail');
            $table->string('memberPassword');
            // $table->string('roleName');
            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('roleId')->on('roles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('members');
    }
}
