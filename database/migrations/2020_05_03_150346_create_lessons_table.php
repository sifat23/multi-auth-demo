<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lesson_name');
            $table->string('lesson_code');
            $table->text('lesson_description');
            $table->bigInteger('class_id')->unsigned();
            $table->foreign('class_id')
              ->references('id')->on('classrooms')
              ->onDelete('cascade');
            $table->string('lesson_link')->nullable();
            $table->string('lesson_path')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
