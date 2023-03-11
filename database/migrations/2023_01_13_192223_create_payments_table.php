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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('buyer_id')->unsigned();
            // $table->bigInteger('seller_id')->unsigned();
            // $table->foreignId('buyer_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('seller_id')->constrained()->cascadeOnDelete();

            $table->unsignedBigInteger('buyer');
            $table->unsignedBigInteger('seller');
            $table->foreign('buyer')->references('id')->on('account_buyers');
            $table->foreign('seller')->references('id')->on('seller_accounts');
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
        Schema::dropIfExists('payments');
    }
};
