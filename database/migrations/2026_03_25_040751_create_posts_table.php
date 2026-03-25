<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
		{
			Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('votes');
                $table->string('name', 100);
                $table->text('text');
                $table->date('created_att');
                $table->dateTime('created_at');
                $table->timestamp('added_on');
			});
		}
	
		public function down()
		{
			Schema::dropIfExists('posts');
		}

};
