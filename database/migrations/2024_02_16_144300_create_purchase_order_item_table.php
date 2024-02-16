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
        Schema::create('purchase_order_item', function (Blueprint $table) {
            $table->id('purchase_order_item_id');
            $table->integer('purchase_order_item_brand_id');
            $table->integer('purchase_order_item_product_id');
            $table->string('purchase_order_item_sku')->nullable(true);
            $table->string('purchase_order_item_qty');
            $table->double('purchase_order_item_purchase_price',8,2);
            $table->double('purchase_order_item_tax',8,2);
            $table->integer('purchase_order_item_po_id');
            $table->integer('purchase_order_item_created_by')->nullable(true);
            $table->integer('purchase_order_item_updated_by')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_item');
    }
};
