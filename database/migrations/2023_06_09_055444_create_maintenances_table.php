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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->references('id')->on('flats')->onDelete('cascade')->onUpdate('cascade');
            $table->text('description')->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->date('reported_date')->nullable();
            $table->enum('status', ['complete', 'incomplete'])->default('incomplete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
