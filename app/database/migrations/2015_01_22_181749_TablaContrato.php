<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaContrato extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratos', function(Blueprint $table)
		{
			$table->increments('id_contrato');
			$table->string('no_contrato',10);
			$table->string('fecha_contrato',20);
			$table->string('vigencia_contrato',20);
			$table->string('tipo_contrato',10);
			$table->string('producto_servicio',50);
			$table->string('cantidad',20);
			$table->string('monto_total',150);
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
		Schema::drop('contratos');
	}

}
