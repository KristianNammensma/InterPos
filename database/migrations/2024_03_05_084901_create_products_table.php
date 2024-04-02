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
            $table->string('name', 255);
            $table->enum('status', ['Available', 'Sold', 'Upcoming']);
            $table->decimal('price', 8, 2);
            $table->decimal('salesPrice', 8, 2);
            $table->text('description');
            $table->integer('vat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
