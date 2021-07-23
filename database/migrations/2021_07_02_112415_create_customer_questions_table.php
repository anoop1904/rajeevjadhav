<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_questions', function (Blueprint $table) {
            $table->id();
            $table->string('service_type')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('partner_fname')->nullable();
            $table->string('partner_lname')->nullable();
            $table->string('question_check')->nullable();
            $table->string('other_question')->nullable();
            $table->string('check_price')->nullable(); 
            $table->integer('customer_id');
            $table->string('plan_type')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('customer_questions');
    }
}
