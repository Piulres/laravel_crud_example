<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');

           $table->string('slug', 255);            
            $table->string('title', 255);
            $table->string('content', 255);
            $table->string('published', 1);
            $table->string('featured', 1);
            $table->string('category', 255);

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
        Schema::drop('posts');
    }

}
