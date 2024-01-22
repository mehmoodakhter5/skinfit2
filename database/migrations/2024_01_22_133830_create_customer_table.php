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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('customer_phone_number')->nullable(true);
            $table->string('customer_email')->nullable(false);
            $table->string('customer_email_verified')->nullable(true);
            $table->string('customer_facebook_token')->nullable(false);
            $table->string('customer_google_token')->nullable(false);
            $table->string('customer_password')->nullable(false);
            $table->string('customer_password_token')->nullable(true);
            $table->string('customer_address')->nullable(true);
            $table->string('customer_city')->nullable(true);
            $table->string('customer_whatsapp_number')->nullable(true);
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
        Schema::dropIfExists('customer');
    }
};
