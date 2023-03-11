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
        Schema::create('products', function (Blueprint $table) {
            $table->id("Id");
            $table->string("gameName",30);
            $table->string("title",50);
            $table->string("Genre",30);
            $table->string("SupportedDevices",30);
            $table->string("price",9);
            $table->string("description",300);
            $table->string("image1",500)->nullable();
            $table->string("image2",500)->nullable();
            $table->string("image3",500)->nullable();
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
        Schema::dropIfExists('products');
    }
};
