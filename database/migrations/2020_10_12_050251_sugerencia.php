<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sugerencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugerencia', function (Blueprint $table) {
            $table->increments('Ids');
            $table->integer('ide')->unsigned();
            $table->foreign('ide')->references('ide')->on('empleo');
            $table->integer('idus')->unsigned();
		    $table->foreign('idus')->references('idus')->on('usuario');
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
        Schema::drop('sugerencia');
    }
}
