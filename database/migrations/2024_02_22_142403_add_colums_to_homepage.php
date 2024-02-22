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
            $table->text('homepage_section_eight_heading')->after('homepage_section_seven_image_two_link');
            $table->text('homepage_section_eight_text');
            $table->text('homepage_section_eight_link')->nullable(true);
            $table->text('homepage_section_nine_main_image');
            $table->text('homepage_section_nine_main_image_link')->nullable(true);
            $table->text('homepage_section_nine_image_one');
            $table->text('homepage_section_nine_image_one_link')->nullable(true);
            $table->text('homepage_section_nine_image_two');
            $table->text('homepage_section_nine_image_two_link')->nullable(true);
            $table->text('homepage_section_nine_image_three');
            $table->text('homepage_section_nine_image_three_link')->nullable(true);
            $table->text('homepage_section_nine_image_four');
            $table->text('homepage_section_nine_image_four_link')->nullable(true);
            $table->text('homepage_section_tenth_heading');
            $table->text('homepage_section_tenth_text');
            $table->text('homepage_section_eleven_image_one');
            $table->text('homepage_section_eleven_image_one_link')->nullable(true);
            $table->text('homepage_section_eleven_image_two');
            $table->text('homepage_section_eleven_image_two_link')->nullable(true);
            $table->text('homepage_section_eleven_image_three');
            $table->text('homepage_section_eleven_image_three_link')->nullable(true);
            $table->text('homepage_section_eleven_text');
            $table->text('homepage_section_twelfth_image');
            $table->text('homepage_section_twelfth_image_link')->nullable(true);
            $table->text('homepage_section_twelfth_brand_image_one');
            $table->text('homepage_section_twelfth_brand_image_one_link')->nullable(true);
            $table->text('homepage_section_twelfth_brand_image_two');
            $table->text('homepage_section_twelfth_brand_image_two_link')->nullable(true);
            $table->text('homepage_section_twelfth_brand_image_three');
            $table->text('homepage_section_twelfth_brand_image_three_link')->nullable(true);
            $table->text('homepage_section_twelfth_brand_image_four');
            $table->text('homepage_section_twelfth_brand_image_four_link')->nullable(true);
            $table->text('homepage_section_twelfth_brand_image_fifth');
            $table->text('homepage_section_twelfth_brand_image_fifth_link')->nullable(true);
            $table->text('homepage_section_thirteen_heading');
            $table->text('homepage_section_thirteen_text');
            $table->text('homepage_section_thirteen_main_image');
            $table->text('homepage_section_thirteen_main_image_link')->nullable(true);
            $table->text('homepage_section_thirteen_image_one');
            $table->text('homepage_section_thirteen_image_one_link')->nullable(true);
            $table->text('homepage_section_thirteen_image_two');
            $table->text('homepage_section_thirteen_image_two_link')->nullable(true);
            $table->text('homepage_section_thirteen_image_three');
            $table->text('homepage_section_thirteen_image_three_link')->nullable(true);
            $table->text('homepage_section_thirteen_image_four');
            $table->text('homepage_section_thirteen_image_four_link')->nullable(true);
            $table->text('homepage_section_fourteen_heading');
            $table->text('homepage_section_fourteen_text');
            $table->text('homepage_section_fifteen_image');
            $table->text('homepage_section_fifteen_heading');
            $table->text('homepage_section_fifteen_text');
            $table->text('homepage_section_fifteen_link')->nullable(true);
            $table->integer('homepage_created_by');
            $table->integer('homepage_updated_by');
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
