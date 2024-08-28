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
        Schema::create('emploiyees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role'); // Role or function within the shop
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('hired_at'); // Date when the emploiee was hired
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploiyees');
    }
};
