<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_products', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->unsignedInteger('user_id');
            $table->string('short_description');
            $table->string('long_description');
            $table->string('posted_by');
            $table->string('main_photo_path');
            $table->string('sub_photo_path');
           
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
        Schema::dropIfExists('post_products');
    }
}



