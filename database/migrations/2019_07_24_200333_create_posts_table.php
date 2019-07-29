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
            $table->bigIncrements('id');
            $table->string('dateRecorded');
            $table->string('bank');
            $table->string('transactionDate');
            $table->string('transactionId');
            $table->string('amount');
            $table->string('cardNumber');
            $table->string('terminalLocation');
            $table->string('customerName');
            $table->string('actionTaken');
            $table->mediumText('remark');
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
