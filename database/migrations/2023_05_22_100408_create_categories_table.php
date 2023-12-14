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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category_image')->nullable();
            $table->unsignedBigInteger('parent_id')->index()->nullable();
            $table->integer('status')->default(1);
            $table->integer('show_in_menu')->default(1);
            $table->integer('featured')->nullable();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            // Define the `parent_id` column as a foreign key that references the `id` column of the `categories` table.
            // $table->unsignedBigInteger('parent_id')->default(0)->nullable();
            // $table->integer('parent_id')->unsigned()->nullable();
            // $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreignId('parent_id')->nullable()->constrained('categories')->cascadeOnDelete();
            // $table->foreign('parent_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }
    // php artisan migrate:fresh --path=/database/migrations/2023_05_22_100408_create_categories_table.php




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
