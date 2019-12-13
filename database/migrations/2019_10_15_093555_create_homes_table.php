<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('route_id');
            $table->unsignedInteger('gate_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('restrict');
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
        Schema::dropIfExists('homes');
        Schema::enableForeignKeyConstraints();
    }
}