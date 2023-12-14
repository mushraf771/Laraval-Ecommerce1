<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_attributes', function (Blueprint $table) {

            $table->id();
            $table->string('sku')->unique();
            $table->string('attribute_image')->nullable();;
            $table->integer('mrp')->nullable();;
            $table->integer('price')->nullable();;
            $table->integer('quantity')->nullable();;
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('product_id');
            // $table->integer('status')->default(1);
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attributes');
    }
};
