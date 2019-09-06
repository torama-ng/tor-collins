<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jobTitle');
            $table->string('emailAddress');
            $table->string('jobType');
            $table->string('location');
            $table->string('jobDescription');
            $table->string('coverImage');
            $table->string('companyName');
            $table->string('companyTagline');
            $table->string('companyEmail');
            $table->string('companyLocation');
            $table->string('website');
            $table->string('companyDob');
            $table->string('facebookLink');
            $table->string('googleLink');
            $table->string('twitterLink');
            $table->string('instagramLink');
            $table->string('linkedinLink');
            $table->string('dribbleLink');
            $table->mediumText('aboutCompany');
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
        Schema::dropIfExists('jobs');
    }
}
