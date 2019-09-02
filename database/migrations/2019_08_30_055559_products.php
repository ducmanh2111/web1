<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('products', function (Blueprint $table) {
              $table->increments('pro_id');
              $table->string('pro_name');
              $table->string('pro_slug');
              $table->integer('pro_price');
              $table->string('pro_image');
              $table->string('pro_description');
              $table->tinyInteger('pro_featured');
              $table->integer('pro_cat_id')->unsigned();
              $table->foreign('pro_cat_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
                $table->integer('promotion');
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
