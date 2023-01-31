<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('image_1');
            $table->string('question_1');
            $table->string('image_2');
            $table->string('question_2');        
            $table->string('image_3');
            $table->string('question_3'); 
            $table->string('image_4');
            $table->string('question_4');
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
        Schema::dropIfExists('question');
    }
};
