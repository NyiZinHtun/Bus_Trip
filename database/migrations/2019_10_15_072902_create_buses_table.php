<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bus_no');
            $table->unsignedInteger('gate_id');
            $table->unsignedInteger('number_of_seats')->nullable();
            $table->string('departure_time');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('gate_id')->references('id')->on('gates')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('buses');
        Schema::enableForeignKeyConstraints();
    }
}
