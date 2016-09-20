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
        //
		Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
			$table->string('mb_id');
			$table->string('name');
			$table->integer('auth');
			$table->string('tel');
			$table->string('email')->unique();
			$table->dateTime('join_date');
			$table->timestamps();
        });
		
		        //
		Schema::create('login_history', function (Blueprint $table) {
            $table->increments('id');
			$table->string('mb_id');
			$table->string('name');
			$table->ipAddress('visitor');
			$table->dateTime('login_date');
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
        //
		  Schema::dropIfExists('member');
		  Schema::dropIfExists('login_history');

    }
}
