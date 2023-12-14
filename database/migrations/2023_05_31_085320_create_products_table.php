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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('name');
            $table->text('slug')->unique();
            $table->string('model')->nullable();
            $table->string('image')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('description')->nullable();
            $table->longText('technical_specification')->nullable();
            $table->longText('uses')->nullable();
            $table->longText('specification')->nullable();
            $table->integer('status')->default(1);
            $table->integer('featured')->default(0);
            $table->integer('show_in_menu')->default(0);
            $table->string('warranty')->nullable();
            $table->string('lead_time')->nullable();
            $table->string('is_promotional')->nullable();
            $table->string('is_discounted')->nullable();
            $table->string('is_trending')->nullable();
            $table->string('show_menu')->nullable();
            $table->unsignedBigInteger('tax_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
