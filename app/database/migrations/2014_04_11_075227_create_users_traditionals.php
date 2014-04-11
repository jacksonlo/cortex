<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTraditionals extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_traditionals', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('traditional_id')->unsigned();;
			$table->foreign('user_id')
			 	  ->references('id')->on('users')
			 	  ->onDelete('cascade')
			 	  ->onUpdate('cascade');
		 	$table->foreign('traditional_id')
		 	  	  ->references('id')->on('traditional')
		 	  	  ->onDelete('cascade')
		 	  	  ->onUpdate('cascade');
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
		Schema::drop('users_traditionals');
	}

}
