<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title');
            $table->mediumText('sub_title')->nullable();
            $table->foreignId('guest_id')
                ->nullable()
                ->references('id')
                ->on('authors');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->boolean('is_anchor')->default(false);
            $table->boolean('is_special')->default(false);
            $table->mediumText('image')->nullable();
            $table->dateTimeTz('publish_date')->index();
            $table->mediumText('video_url')->nullable();
            $table->mediumText('external_url')->nullable();
            $table->bigInteger('view_count')->default(1);
            $table->mediumText('sub_description')->nullable();
            $table->longText('description');
            $table->mediumText('image_description')->nullable();
            $table->string('date_line')->nullable();
            $table->foreignId('created_by')
                ->references('id')
                ->on('users');
            $table->foreignId('updated_by')
                ->nullable()
                ->references('id')
                ->on('users');
            $table->foreignId('deleted_by')
                ->nullable()
                ->references('id')
                ->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
