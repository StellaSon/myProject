<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // test111 table에 권한 auth 필드를 추가 
		
		 Schema::table('test111', function (Blueprint $table) {
			  $table->string('auth')->after('name')->nullable(); // nullable()은 NULL 을 허용한다는 얘기
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
		 Schema::table('test111', function(Blueprint $table) {
            $table->dropColumn('auth');
        });
    }
}
