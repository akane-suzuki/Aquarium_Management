<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAquariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aquaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aqua_name');
            $table->date('set_up');
            $table->integer('capa');
            $table->double('ph');
            $table->string('fish');
            $table->string('plants_name');
            $table->string('memo');
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
        Schema::drop('aquaria');
    }
}
