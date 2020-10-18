<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('Idem');
			$table->string('Nombre',30);
			$table->string('Tipo',20);
            $table->string('Calle',50);
            $table->string('Estado',30);
            $table->integer('CP');
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
        Schema::drop('empresa');
    }
}
