<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')
                ->constrained('catgories')
                ->onDelete('cascade');
            $table->string('pro_name', 60);
            $table->string('pro_image');
            $table->integer('pro_price');
            $table->string('qty');
            $table->string('description');
            $table->enum('status', ['Instock', 'Outstock'])->default('Instock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
