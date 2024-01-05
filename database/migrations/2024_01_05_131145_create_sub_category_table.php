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
        Schema::create('sub_category', function (Blueprint $table) {
            $table->id('sub_category_id');
            $table->integer('category_id');
            $table->string('sub_category_name');
            $table->string('sub_category_slug');
            $table->string('sub_category_img');
            $table->integer('sub_category_sort');
            $table->text('sub_category_text');
            $table->text('attribute_ids');
            $table->enum('sub_category_status',['true','false']);
            $table->integer('sub_category_created_by');
            $table->integer('sub_category_updated_by');








            
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
        Schema::dropIfExists('sub_category');
    }
};
