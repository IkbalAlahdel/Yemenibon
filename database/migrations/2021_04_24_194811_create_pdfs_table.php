<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('publisher');
            $table->string('pdf');
            $table->string('img');
            $table->string('download_url');
            $table->string('veiw_url');
            $table->string('desc');
            $table->string('name_ar');
            $table->string('publisher_ar');
            $table->string('desc_ar');
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
        Schema::dropIfExists('pdfs');
    }
}
