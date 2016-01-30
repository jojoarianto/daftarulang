<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPesertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('data_peserta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_users');
			$table->string('nama1');
			$table->string('nomor1');
			$table->string('jk1');
			$table->string('nama2');
			$table->string('nomor2');
			$table->string('jk2');
			$table->string('nama3');
			$table->string('nomor3');
			$table->string('jk3');

			$table->string('namagp');
			$table->string('nomorgp');
			$table->string('jkgp');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('data_peserta');
	}

}
