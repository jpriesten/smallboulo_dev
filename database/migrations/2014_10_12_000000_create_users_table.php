<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('userType');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profilePic');
            $table->string('country');
            $table->string('city');
            $table->string('tel');
            $table->string('gender');
            $table->date('birthday');
            $table->string('active');
            $table->string('resetToken');
            $table->string('resetComplete');
            $table->string('noOfJobs');
            $table->string('recommendations');
            $table->string('comment');
            $table->rememberToken();
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
