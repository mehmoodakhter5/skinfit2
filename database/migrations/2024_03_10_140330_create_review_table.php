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
        Schema::create('review', function (Blueprint $table) {
            $table->id('review_id');
            $table->string('review_name');
            $table->string('review_email');  
            $table->string('review_phone_number');  
            $table->string('review_message');  
            $table->string('review_star');  
            $table->integer('review_product_id');
            $table->integer('review_customer_id');  
            $table->enum('review_approval',['true','false'])->default('false');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
