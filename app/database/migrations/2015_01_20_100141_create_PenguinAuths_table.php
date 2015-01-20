<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenguinAuthsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_clients', function(Blueprint $table)
		{
			$table->string('client_id', 80);
			$table->string('client_secret', 80);
			$table->string('redirect_uri', 2000);
			$table->string('grant_types', 80);
			$table->string('scope', 100);
			$table->string('user_id', 80);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_clients');
	}

}
