<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
	{
		Schema::table('posts', function (Blueprint $table) {
			$table->string('title',100)->unsigned();       #Безнаковость        
			$table->text('desc')->comment('my comment');    #Комментарий
            $table->renameColumn('desc', 'text2');
            $table->string('desc')->nullable();   #Обнуляемое поле      Можно добавит модификатор при изменении поля, дописать ->change()
            $table->string('desc2')->default('nnn');    #Значение по умолчанию
		});
	}
// ->first()   Помещает поле первым в таблице
// ->after('id')    Помещает поле после указанного поля (id)
// 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::drop('post');    #удаление таблицы
        // Schema::dropIfExists('posts');     Проверка существования таблицы
        // Schema::rename('posts', 'articles');     Переименнование таблицы
        
    }
};
