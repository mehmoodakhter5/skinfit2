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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('order_no');
            $table->string('order_tracking_no')->nullable(true);
            $table->integer('order_customer_id')->nullable(true);
            $table->integer('order_coupon_id')->nullable(true);
            $table->string('order_order_ship')->nullable(true);
            $table->string('order_source')->nullable(true);
            $table->string('order_payment_type')->nullable(false)->default('COD');
            $table->text('order_notes')->nullable(true);
            $table->text('order_edit_notes')->nullable(true);
            $table->enum('order_current_status',['Pending','Confirm','In-process','Dispatch'])->nullable(true)->default('Pending');
            $table->date('order_booking_date')->nullable(true);
            $table->string('order_ivr_call')->nullable(true);
            $table->date('order_dispatch_date')->nullable(true);
            $table->date('order_delivered_date')->nullable(true);
            $table->string('order_courier_status')->nullable(true);
            $table->string('order_courier_payment_status')->nullable(true);
            $table->integer('order_courier_service_chargers')->nullable(true);
            $table->integer('order_courier_balance')->nullable(true);
            $table->string('order_dispatch_remarks')->nullable(true);
            $table->double('order_actual_amt',12,2)->nullable(false);
            $table->double('order_disscount_amt',12,2)->nullable(true);
            $table->double('order_shipping_amt',12,2)->nullable(true);
            $table->double('order_total_amt',12,2)->nullable(false);
            $table->string('order_customer_first_name')->nullable(false);
            $table->string('order_customer_last_name')->nullable(false);
            $table->string('order_customer_phone')->nullable(false);
            $table->string('order_customer_whatsapp_phone')->nullable(true);
            $table->string('order_customer_email')->nullable(false);
            $table->string('order_customer_state')->nullable(true);
            $table->string('order_customer_city')->nullable(false);
            $table->text('order_customer_landmark')->nullable(true);
            $table->integer('order_payment_rec')->nullable(true);
            $table->string('order_transaction_id')->nullable(true);
            $table->string('order_transaction_status')->nullable(true);
            $table->string('order_reason')->nullable(true);
            $table->integer('order_pending')->nullable(true);
            $table->integer('order_confirm')->nullable(true);
            $table->integer('order_dispatch')->nullable(true);
            $table->integer('order_deliver')->nullable(true);
            $table->integer('order_cancel')->nullable(true);
            $table->integer('order_wa_send')->nullable(true);
            $table->integer('order_wa_sms')->nullable(true);
            $table->integer('order_wa_email')->nullable(true);
            $table->integer('order_return')->nullable(true);
            $table->enum('order_status',['enable','disable'])->nullable(true);
            $table->string('order_created_by')->nullable(true);
            $table->string('order_updated_by')->nullable(true);
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
        Schema::dropIfExists('order');
    }
};
