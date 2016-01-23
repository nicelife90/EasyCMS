<?php

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
			$table->engine = 'InnoDB';
    		$table->increments('id');
			$table->integer('menu_id')->unsigned();
			$table->string('title_fr', 200);
			$table->string('title_en', 200);
			$table->text('content_fr');
			$table->text('content_en');
			$table->integer('user_id')->unsigned()->nullable();
			$table->timestamps();
			
			/*$table->foreign('menu_id')
				  ->references('id')->on('menu')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			
			$table->foreign('user_id')
				  ->references('id')->on('users')
				  ->onDelete('set null')
				  ->onUpdate('cascade');*/
			
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
