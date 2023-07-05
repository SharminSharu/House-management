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
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->char('flat_name', 50)->nullable();
            $table->char('floor', 50)->nullable();
            $table->char('flat_size', 50)->nullable();
            $table->char('bed_room', 50)->nullable();
            $table->char('balcony', 50)->nullable();
            $table->char('wash_room', 50)->nullable();
            $table->decimal('rent_cost', 10, 2)->nullable();
            $table->enum('status', ['occupied', 'empty'])->default('empty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
    }
};
