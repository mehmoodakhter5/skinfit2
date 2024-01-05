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
        Schema::create('sub_category_level_2', function (Blueprint $table) {
            $table->id('sub_category_level_2_id');
            $table->integer('sub_category_id');
            $table->string('sub_category_level_2_name');
            $table->string('sub_category_level_2_slug');
            $table->text('sub_category_level_2_text');
            $table->text('attribute_ids');
            $table->enum('sub_category_level_2_status',['true','false']);
            $table->integer('sub_category_level_2_created_by');
            $table->integer('sub_category_level_2_updated_by');
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
        Schema::dropIfExists('sub_category_level_2');
    }
};
