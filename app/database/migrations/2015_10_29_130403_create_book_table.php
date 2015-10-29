<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('book', function(Blueprint $table)
		{
			Schema::create("book", function(Blueprint $table) {
				$table->increments("id");
				$table->string("bookName");
				$table->string("author");
				$table->string("image");
				$table->string("fileName");
				$table->timestamps();
			});
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('book', function(Blueprint $table)
		{
			Schema::dropIfExists("book");
		});
	}

}