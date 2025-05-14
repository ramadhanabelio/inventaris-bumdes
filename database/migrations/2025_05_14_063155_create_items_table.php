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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name', 50);
            $table->string('brand', 50)->nullable();
            $table->string('origin', 100)->nullable();
            $table->integer('quantity');
            $table->string('type', 50)->nullable();
            $table->date('acquired_date')->nullable();
            $table->integer('price')->nullable();
            $table->enum('status', ['Diproses', 'Diterima', 'Ditolak'])->default('Diproses');
            $table->enum('condition', ['Baik', 'Rusak'])->default('Baik');
            $table->string('image')->nullable();
            $table->string('qr_code', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
