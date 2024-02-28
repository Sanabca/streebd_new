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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('receiver_name');
            $table->string('mobile_number')->nullable();
            $table->string('admin')->nullable();
            $table->string('date')->nullable();
            $table->string('bill_address')->nullable();
            $table->string('note')->nullable();
            $table->string('method')->nullable();
            $table->string('amount')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default('active')->nullable();
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
