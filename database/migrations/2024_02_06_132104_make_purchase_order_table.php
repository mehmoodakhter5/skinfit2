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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id('purchase_order_id');
            $table->integer('purchase_order_supplier_id');
            $table->string('purchase_order_reference');
            $table->date('purchase_order_date');
            $table->text('purchase_order_notes');
            $table->string('purchase_order_attachments');
            $table->integer('purchase_order_created_by');
            $table->integer('purchase_order_updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
