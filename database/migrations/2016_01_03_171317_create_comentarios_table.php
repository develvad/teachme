<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string("comentario",255);
			$table->integer("usuario_id")->unsigned();
			$table->foreign("usuario_id")->references("id")->on("users");
			$table->integer("ticket_id")->unsigned();
			$table->foreign("ticket_id")->references("id")->on("tickets");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comentarios');
	}

}
