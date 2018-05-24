<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('bouloId');
            $table->string('userId');
            $table->string('toDo');
            $table->string('jobLocation');
            $table->string('experience');
            $table->date('start');
            $table->date('end');
            $table->date('deadline');
            $table->string('noOFViews');
            $table->string('jobState');
            $table->string('priceRange');
            $table->string('numOfWorkers');
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
        Schema::dropIfExists('posts');
    }
}
