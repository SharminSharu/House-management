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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('flatassign_id')->references('id')->on('flat_assigns')->onDelete('cascade')->onUpdate('cascade');
            $table->char('purpose', 50)->nullable();
            $table->decimal('paid', 10, 2)->nullable();
            $table->decimal('due', 10, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->timestamps();
         
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
