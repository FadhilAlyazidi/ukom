<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_obat');
            $table->string('nm_obat');
            $table->string('jml_obat');
			$table->string('ukuran');
            $table->string('harga');
			$table->timestamps();
            $table->timestamp('created_at');
            $table->timestamp('update_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('obats');
	}

}
