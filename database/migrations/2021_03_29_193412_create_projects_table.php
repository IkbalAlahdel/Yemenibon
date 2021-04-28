<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_ar');
            $table->string('desc');
            $table->string('desc_ar');
            $table->longtext('ldesc');
            $table->longtext('ldesc_ar');
            $table->string('image');
            $table->string('multi_image');
            $table->string('owner');
            $table->string('owner_ar');
            $table->string('address');
            $table->string('address_ar');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('face_link');
            $table->string('twit_link');
            $table->string('insta_link');
            $table->string('shift_h');
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories');
           
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
        Schema::dropIfExists('projects');
    }
}
