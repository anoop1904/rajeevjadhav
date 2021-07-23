<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');        
            $table->string('name');
            $table->string('otherpname');
            $table->string('ques');
            $table->string('answer');
            $table->unsignedBigInteger('status');        
            $table->date('ans_at');        
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
        Schema::dropIfExists('user_ques');
    }
}
