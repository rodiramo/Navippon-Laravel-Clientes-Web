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
        Schema::create('restaurant_has_categories', function (Blueprint $table) {
            $table->foreignId('restaurant_id')->constrained('restaurants', 'restaurant_id');
            $table->unsignedTinyInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_has_categories');
    }
};
