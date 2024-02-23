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
        Schema::table('homepage', function (Blueprint $table) {
            $table->string('homepage_section_one_text_one_link')->nullabele(true)->after('homepage_section_one_text_one');
            $table->string('homepage_section_one_text_one_link_text')->after('homepage_section_one_text_one_link');
            $table->string('homepage_section_one_image_text_span')->after('homepage_section_one_image_text');
            $table->string('homepage_section_five_image_three_heading_span')->after('homepage_section_five_image_three_heading');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homepage', function (Blueprint $table) {
            //
        });
    }
};
