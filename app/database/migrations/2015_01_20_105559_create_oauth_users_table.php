<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_users', function(Blueprint $table)
		{
			$table->string('username',255);
			$table->string('password',2000);
			$table->string('first_name',255);
			$table->string('last_name',255);
			$table->string('email');	
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_users');
	}

}
