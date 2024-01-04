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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_category_id');
            $table->string('product_sub_category_id');
            $table->string('product_sub_category_id_level_two');
            $table->integer('product_brand_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_barcode');
            $table->string('product_image');
            $table->string('product_image_cloud');
            $table->longText('product_short_description');
            $table->longText('product_long_description');
            $table->longText('product_description_one');
            $table->longText('product_description_two');
            $table->double('product_regular_price', 8, 2);
            $table->double('product_discounted_price', 8, 2);
            $table->string('product_label');
            $table->string('product_volume');
            $table->enum('product_featured',array('true','false'))->default('false');
            $table->enum('product_dropship',array('true','false'))->default('false');
           
            $table->enum('product_active',['true','false'])->default('false');
            $table->enum('product_status',['true','false'])->default('true');
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
        Schema::dropIfExists('product');
    }
};
