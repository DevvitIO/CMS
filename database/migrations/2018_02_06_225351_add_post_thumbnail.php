<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostThumbnail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('posts', function($table) {
       		$table->text('thumbnail')->nullable($value = true);
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('posts', function($table) {
       		$table->dropColumn('thumbnail');
   	 	});
    }
}
