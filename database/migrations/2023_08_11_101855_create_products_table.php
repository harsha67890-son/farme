<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->decimal('mrp');
            $table->decimal('price')->nullable();
            $table->string('sku');
            $table->enum('stock_status',['instock','outofstock']);
            $table->boolean('ingredients')->default(false);
            $table->UnsignedInteger('stock')->default(0);
            $table->string('image')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->bigInteger('packsize_id')->unsigned()->nullable();
            $table->string('top_product')->default(0);
            $table->string('best_product')->default(0);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('packsize_id')->references('id')->on('packsizes')->onDelete('cascade');
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
