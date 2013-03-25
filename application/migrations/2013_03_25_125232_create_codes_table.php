<?php

class Create_Codes_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('codes', function($table)
		{
		    $table->increments('id');
		    $table->text('code');
		    $table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('codes');
	}

}