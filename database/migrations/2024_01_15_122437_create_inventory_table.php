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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->string('inventory_supplier_id')->nullable(true);
            $table->string('inventory_logistics_type')->nullable(true);
            $table->string('inventory_brand_id')->nullable(true);
            $table->string('inventory_product_id')->nullable(true);
            $table->string('inventory_batch_number')->nullable(true);
            $table->string('inventory_reference_number')->nullable(true);
            $table->string('inventory_expiry_date')->nullable(true);
            $table->string('inventory_quantity')->nullable(true);
            $table->string('inventory_price')->nullable(true);
            $table->string('inventory_created_by');
            $table->string('inventory_updated_by');
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
        Schema::dropIfExists('inventory');
    }
};
