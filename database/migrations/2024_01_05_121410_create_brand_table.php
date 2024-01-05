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
        Schema::create('brand', function (Blueprint $table) {
            $table->id('brand_id');
            $table->string('brand_name');
            $table->string('brand_slug');
            $table->enum('brand_featured',['true','false']);
            $table->string('brand_rack');
            $table->enum('brand_most_search',['true','false']);
            $table->string('brand_supplier');
            $table->string('logistics_type');
            $table->enum('brand_active',['true','false']);
            $table->text('brand_text');
            $table->string('brand_image');
            $table->string('brand_banner');
            $table->string('brand_banner_extra1');
            $table->string('brand_banner_extra1_link');
            $table->string('brand_banner_extra2');
            $table->string('brand_banner_extra2_link');
            $table->integer('country_id');
            $table->enum('brand_status',['true','false']);
            $table->integer('brand_created_by');
            $table->integer('brand_updated_by');
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
        Schema::dropIfExists('brand');
    }
};
