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
        Schema::create('flat_assigns', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tenant_id')->references('id')->on('tenants')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('flat_id')->references('id')->on('flats')->onDelete('cascade')->onUpdate('cascade');
            
            $table->date('assign_date')->nullable();
            $table->decimal('rent_cost', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_assigns');
    }
};
