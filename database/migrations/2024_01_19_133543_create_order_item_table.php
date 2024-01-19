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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->string('order_id')->nullable(true);
            $table->string('order_no')->nullable(false);
            $table->integer('deal_id')->nullable(true);
            $table->integer('product_id')->nullable(false);
            $table->integer('deal_item_id')->nullable(true);
            $table->string('deal_image')->nullable(true);
            $table->string('product_image')->nullable(true);
            $table->string('deal_name')->nullable(true);
            $table->string('product_name')->nullable(true);
            $table->double('deal_price','8','2')->nullable(true);
            $table->double('deal_actual_price','8','2')->nullable(true);
            $table->double('deal_item_price','8','2')->nullable(true);
            $table->double('deal_item_actual_price','8','2')->nullable(true);
            $table->double('product_price','8','2')->nullable(true);
            $table->double('cost_price','8','2')->nullable(true);
            $table->double('dis_price','8','2')->nullable(true);
            $table->double('reg_price','8','2')->nullable(true);
            $table->integer('deal_qty')->nullable(true);
            $table->integer('deal_item_qty')->nullable(true);
            $table->integer('product_qty')->nullable(true);
            $table->string('product_variant')->nullable(false);
            $table->string('product_variant_id')->nullable(false);
            $table->enum('product_type',['deal','product'])->nullable(false);
            $table->enum('review',['true','false'])->nullable(true);
            $table->enum('order_item_status',['enable','disable'])->nullable(true);
            $table->integer('order_item_created_by')->nullable(true);
            $table->integer('order_item_updated_by')->nullable(true);
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
        Schema::dropIfExists('order_item');
    }
};
