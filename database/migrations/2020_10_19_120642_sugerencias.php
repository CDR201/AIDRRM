<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sugerencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sugerencias', function (Blueprint $table) {
            $table->increments('Ids');
            $table->integer('Ide')->unsigned();
            $table->foreign('Ide')->references('Ide')->on('Empleos');
            $table->integer('Idu')->unsigned();
		    $table->foreign('Idu')->references('Idu')->on('Usuarios');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::drop('Sugerencias');
    }
}
