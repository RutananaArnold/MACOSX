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
            $table->bigInteger('orig_price')->unsigned();
            $table->bigInteger('new_price')->unsigned()->nullable();
            $table->bigInteger('percentage')->unsigned()->nullable();
            $table->bigInteger('stock')->unsigned()->nullable(); //Number of items in stock
            $table->bigInteger('leadtime')->unsigned()->nullable(); //This is the lead time
            $table->string('brand')->nullable()->default('Generic');
            $table->string('status')->nullable();
            $table->string('sizes')->nullable();
            $table->string('colors')->nullable();
            $table->string('material')->nullable();
            $table->string('reviews');
            $table->string('imagefile1');
            $table->string('imagefile2')->nullable();
            $table->string('imagefile3')->nullable();
            $table->string('apps')->nullable();
            $table->text('description');
            $table->text('deliverables')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
