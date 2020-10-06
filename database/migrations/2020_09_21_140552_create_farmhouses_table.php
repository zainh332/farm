<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateFarmhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmhouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->string('title', 100);
            $table->string('city', 100);
            $table->integer('rooms');
            $table->integer('price');
            $table->longText('description');
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
        Schema::dropIfExists('farmhouses');
    }
}
