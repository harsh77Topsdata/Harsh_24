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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //Product
            $table->foreignId('pro_id')
                ->constrained('products')
                ->onDelete('cascade');
            //Customer/Users
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->string('quantity');
            $table->bigInteger('totalamount');
            $table->enum('status',['Pending','Delevered'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
