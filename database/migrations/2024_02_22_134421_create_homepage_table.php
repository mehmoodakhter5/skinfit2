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
        Schema::create('homepage', function (Blueprint $table) {
            $table->id('homepage_id');
            $table->text('homepage_section_one_heading_one');
            $table->text('homepage_section_one_text_one');
            $table->text('homepage_section_one_image_one');
            $table->text('homepage_section_one_image_one_link')->nullable(true);
            $table->text('homepage_section_one_image_two');
            $table->text('homepage_section_one_image_two_link')->nullable(true);
            $table->text('homepage_section_one_image_three');
            $table->text('homepage_section_one_image_three_link')->nullable(true);
            $table->text('homepage_section_one_image_text');
            $table->text('homepage_section_two_banner_image');
            $table->text('homepage_section_two_heading_one');
            $table->text('homepage_section_two_text');
            $table->text('homepage_section_three_banner_image');
            $table->text('homepage_section_three_image_one');
            $table->text('homepage_section_three_image_one_link')->nullable(true);
            $table->text('homepage_section_three_image_two');
            $table->text('homepage_section_three_image_two_link')->nullable(true);
            $table->text('homepage_section_three_image_three');
            $table->text('homepage_section_three_image_three_link')->nullable(true);
            $table->text('homepage_section_three_image_four');
            $table->text('homepage_section_three_image_four_link')->nullable(true);
            $table->text('homepage_section_four_heading');
            $table->text('homepage_section_four_text');
            $table->text('homepage_section_four_box_one_icon');
            $table->text('homepage_section_four_box_one_heading');
            $table->text('homepage_section_four_box_one_text');
            $table->text('homepage_section_four_box_two_icon');
            $table->text('homepage_section_four_box_two_heading');
            $table->text('homepage_section_four_box_two_text');
            $table->text('homepage_section_four_box_three_icon');
            $table->text('homepage_section_four_box_three_heading');
            $table->text('homepage_section_four_box_three_text');
            $table->text('homepage_section_four_box_four_icon');
            $table->text('homepage_section_four_box_four_heading');
            $table->text('homepage_section_four_box_four_text');
            $table->text('homepage_section_five_image_one');
            $table->text('homepage_section_five_image_one_link')->nullable(true);
            $table->text('homepage_section_five_image_two');
            $table->text('homepage_section_five_image_two_link')->nullable(true);
            $table->text('homepage_section_five_image_three');
            $table->text('homepage_section_five_image_three_link')->nullable(true);
            $table->text('homepage_section_five_image_three_heading')->nullable(true);
            $table->text('homepage_section_five_image_three_text');
            $table->text('homepage_section_five_image_three_span_text');
            $table->text('homepage_section_six_heading');
            $table->text('homepage_section_six_text');
            $table->text('homepage_section_seven_image_one');
            $table->text('homepage_section_seven_image_one_link')->nullable(true);
            $table->text('homepage_section_seven_image_two');
            $table->text('homepage_section_seven_image_two_link')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage');
    }
};
