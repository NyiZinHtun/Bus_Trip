<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_name')->unique();
            $table->unsignedInteger('from_id');
            $table->unsignedInteger('to_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('from_id')->references('id')->on('cities')->onDelete('restrict');
            $table->foreign('to_id')->references('id')->on('cities')->onDelete('restrict');
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
        Schema::dropIfExists('routes');
        Schema::enableForeignKeyConstraints();
    }
}
