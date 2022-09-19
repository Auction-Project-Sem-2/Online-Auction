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

            $table->integer('product_category_id')->unsigned();
            $table->string('name');

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->text('description')->nullable();
            $table->double('price');
            $table->integer('qty');
            $table->double('weight')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('featured');

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
