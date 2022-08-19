<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('title');
            $table->string('slug',100)->unique()->nullable();
            $table->text('body')->nullable();
            $table->string('lu_content_status',50)->nullable();
            $table->string('img',100)->nullable();
            $table->string('lu_level',20)->nullable();
            $table->string('lu_lang',20)->nullable();
            $table->text('short_description')->nullable();
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
