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
        Schema::table('inventory', function (Blueprint $table) {
            $table->string('inventory_supplier_id')->nullable(true)->change();
            $table->string('inventory_logistics_type')->nullable(true)->change();
            $table->string('inventory_brand_id')->nullable(true)->change();
            $table->string('inventory_product_id')->nullable(true)->change();
            $table->string('inventory_batch_number')->nullable(true)->change();
            $table->string('inventory_reference_number')->nullable(true)->change();
            $table->string('inventory_expiry_date')->nullable(true)->change();
            $table->string('inventory_quantity')->nullable(true)->change();
            $table->string('inventory_price')->nullable(true)->change();
            $table->string('inventory_created_by');
            $table->string('inventory_updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory', function (Blueprint $table) {
            //
        });
    }
};
