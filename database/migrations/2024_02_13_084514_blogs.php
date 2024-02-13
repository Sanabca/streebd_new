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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('title');
            $table->string('blog_category_id');
            $table->longText('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('tags')->nullable();
            $table->string('status')->default('active')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('image_alt_text')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            // $table->string('meta_slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
