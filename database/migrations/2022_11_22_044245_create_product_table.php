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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedBigInteger("sub_category_id");
            $table->foreign('sub_category_id')->references('id')->on('sub_category');
            $table->decimal('selling_price', $precision = 6, $scale = 2);
            $table->decimal('mrp', $precision = 6, $scale = 2);
            $table->string('slug');
            $table->string('desc');
            $table->boolean('cod');
            $table->unsignedBigInteger("image_id");
            $table->foreign('image_id')->references('id')->on('product_image');
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
        Schema::dropIfExists('product');
    }
};
