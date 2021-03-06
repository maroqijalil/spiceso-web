<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
  public function up()
  {
    Schema::create('order_product', function (Blueprint $table) {
      $table->unsignedBigInteger('order_id')->nullable();
      $table->unsignedBigInteger('product_id')->nullable();
      $table->integer('jumlah')->nullable();
      $table->timestamps();

      $table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
      $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
    });
  }
  public function down()
  {
    Schema::dropIfExists('order_product');
  }
}
