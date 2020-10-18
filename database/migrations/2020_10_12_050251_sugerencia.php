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
            $table->integer('Ide')->unsigned();
            $table->foreign('Ide')->references('Ide')->on('empleo');
            $table->integer('Idu')->unsigned();
		    $table->foreign('Idu')->references('Idu')->on('usuario');
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
