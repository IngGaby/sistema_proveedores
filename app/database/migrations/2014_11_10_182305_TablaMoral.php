<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaMoral extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('morales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_empresa',50);
			$table->string('domicilio_empresa',50);
			$table->string('numero_acta',20);
			$table->string('numero_notario',10);
			$table->string('localidad_notario',20);
			$table->string('nombre_notario',20);
			$table->string('a_paterno_notario',20);
			$table->string('a_materno_notario',20);
			$table->string('nombre_representante',20);
			$table->string('a_paterno_representante',20);
			$table->string('a_materno_representante',20);
			$table->string('estado',1);
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
		Schema::drop('morales');
	}

}
