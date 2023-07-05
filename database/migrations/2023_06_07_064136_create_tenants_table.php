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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50)->nullable();
            $table->char('photo', 50)->nullable();
            $table->char('nid', 50)->nullable();
            $table->string('email')->unique();
            $table->char('phn_no', 50)->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->nullable();
            $table->char('occupation', 50)->nullable();
            $table->char('family_member', 50)->nullable();
            $table->text('per_address')->nullable();
            $table->date('move_in')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
