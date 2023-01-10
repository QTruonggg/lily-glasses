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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail');
            $table->string('color');
            $table->string('color-image');
            $table->string('product_code');
            $table->bigInteger('category_id');
            $table->bigInteger('old_price');
            $table->bigInteger('percent_discount');
            $table->bigInteger('current_price');
            $table->string('seo_keyword');
            $table->LONGTEXT('seo_description');
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
};
