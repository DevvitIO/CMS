<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned()->nullable();
			$table->string('title');
            $table->text('text')->nullable($value = true);
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::table('posts', function($table) {

            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
