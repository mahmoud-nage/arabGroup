<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}