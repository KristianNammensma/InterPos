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
      Schema::create('attribute_product', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('attribute_id');
        $table->unsignedBigInteger('product_id');
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        // Composite unique constraint to ensure no duplicate pairs
        $table->unique(['attribute_id', 'product_id']);
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
