<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('professionalTitle');
            $table->string('category');
            $table->mediumText('aboutNote');
            $table->string('picture');
            $table->string('phone');
            $table->string('location');
            $table->string('dob');
            $table->string('region');
            $table->string('fbLink');
            $table->string('gLink');
            $table->string('twLink');
            $table->string('igLink');
            $table->string('lnLink');
            $table->string('resumeContent');
            $table->string('schoolName');
            $table->string('qualification');
            $table->string('dateFrom');
            $table->string('dateTo');
            $table->mediumText('notes');
            $table->string('employer');
            $table->string('position');
            $table->string('dateFromEx');
            $table->string('dateToEx');
            $table->mediumText('notesSecond');
            $table->string('skill');
            $table->string('percent');
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
        Schema::dropIfExists('resume');
    }
}
