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
        Schema::create('blogs_category', function (Blueprint $table) {
            $table->id('blogs_category');
            $table->string('blogs_category_name');
            $table->string('blogs_category_slug');
            $table->string('blogs_category_image')->nullable(true);
            $table->integer('blogs_category_created_by')->nullable(true);
            $table->integer('blogs_category_updated_by')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs_category');
    }
};