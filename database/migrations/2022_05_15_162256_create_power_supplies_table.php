<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('modularity')->nullable();
            $table->string('quality')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('computer_id');
            $table->foreign('computer_id')->references('id')->on('computers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('power_supplies');
    }
}
