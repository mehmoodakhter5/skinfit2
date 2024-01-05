<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name');
            $table->string('category_slug');
            $table->string('category_image');
            $table->string('category_text');
            $table->enum('category_feature',['true','false']);
            $table->integer('category_sort');
            $table->enum('category_status',['true','false']);
            $table->text('attribute_ids');
            $table->string('category_created_by');
            $table->string('category_updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
