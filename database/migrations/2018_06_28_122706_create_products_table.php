<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->String('productName')->nullable();
            $table->String('Price')->nullable();
            $table->String('discount')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('available')->nullable();
            $table->String('description')->nullable();
            $table->String('image1')->nullable();
            $table->String('image2')->nullable();
            $table->String('image3')->nullable();
            $table->String('image4')->nullable();
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
}
