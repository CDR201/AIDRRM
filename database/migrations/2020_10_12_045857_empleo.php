<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('empleo', function (Blueprint $table) {
            $table->increments('Ide');
			$table->string('Categoria',30);
            $table->integer('Sueldo');
            $table->string('Requisitos',100);
            $table->integer('Idem')->unsigned();
		    $table->foreign('Idem')->references('Idem')->on('empresa');
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
        Schema::drop('empleo');
    }
}
