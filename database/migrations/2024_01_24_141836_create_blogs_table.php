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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->string('blog_slug');
            $table->text('blog_content');
            $table->string('blog_image');
            $table->string('blog_image_alt');
            $table->string('blog_thumb');
            $table->string('blog_thumb_alt');
            $table->integer('category_id');
            $table->enum('blog_publish',['true','false']);
            $table->enum('blog_status',['true','false']);
            $table->integer('blog_created_by');
            $table->integer('blog_updated_by');
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
        Schema::dropIfExists('blogs');
    }
};
