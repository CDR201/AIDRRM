<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('Idu');
			$table->string('Nombre',30);
            $table->string('Apellido M',20);
            $table->string('Apellido P',20);
            $table->integer('Edad');
            $table->string('Calle',50);
            $table->string('Estado',30);
            $table->integer('CP');
            $table->string('CV',254);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Usuarios');
    }
}
