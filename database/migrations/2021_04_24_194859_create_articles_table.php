<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_name');
            $table->date('date');
            $table->string('publisher');
            $table->string('article');
            $table->string('qoute');
            $table->string('image');
            $table->string('source_url');
            $table->string('desc');
            $table->string('name_ar');
            $table->string('publisher_ar');
            $table->string('desc_ar');
            $table->string('article_ar');
            $table->string('qoute_ar');
            $table->foreignId('category_id')->constrained('categories');
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
        Schema::dropIfExists('articles');
    }
}
