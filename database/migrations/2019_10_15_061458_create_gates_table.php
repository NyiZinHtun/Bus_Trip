<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('name_mm')->unique()->nullable();
            $table->unsignedInteger('bus_station_id');
            $table->string('bus_fee');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('bus_station_id')->references('id')->on('bus_stations')->onDelete('restrict');
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
        Schema::dropIfExists('gates');
        Schema::enableForeignKeyConstraints();
    }
}
