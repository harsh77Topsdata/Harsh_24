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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->foreignId('s_detail') // Foreign key field
            ->constrained('students') // References `id` on `categories`
            ->onDelete('cascade');
            $table->foreignId('c_head') // Foreign key field
            ->constrained('students') // References `id` on `categories`
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
