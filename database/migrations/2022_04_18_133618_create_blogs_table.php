<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');//author
            $table->string('title')->unique();
            $table->string('slug',100)->unique()->nullable();
            $table->text('body')->nullable();
            $table->string('short_description');
            $table->string('img',100)->nullable();
            $table->tinyInteger('study_time')->default(0);
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description',500)->nullable();
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
}
