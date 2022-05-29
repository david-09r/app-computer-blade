<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_purchase')->nullable();
            $table->dateTime('date_delivery')->nullable();
            $table->dateTime('date_assembly')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('assembler_id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('assembler_id')->references('id')->on('assemblers');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
