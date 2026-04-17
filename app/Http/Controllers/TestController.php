<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    #Подключение фасада DB


class TestController extends Controller
{
    // $posts = DB::table("posts")->get();
    // foreach ($posts as $post){
    //     dump($post);          Вывод всех значений.
    // }

    // foreach ($posts as $post){
    //     dump($post->title );          Отдельный столбец.
    //     dump( $post->slug );
    // }


    // $posts = DB::table('posts')->select('title', 'text')->get();                     Указание столбцов через "select".

    // $posts = DB::table('posts')->select('title', 'text as post_text')->get();           Переименование столбцов через "as": text as post_text.

    // $posts = DB::table('posts')->where('likes', 100)->get();                           Выводит посты у которых 100 лайков, через "where": where('likes', 100).

    // $posts = DB::table('posts')
	// 	->where('likes', '>', 10)
	// 	->where('likes', '<', 20)                          Сразу два условия "where".
	// 	->get();

    // $post = DB::table('posts')->where('id', 1)->first();   получение одной строки.
    
    // $title = DB::table('posts')->where('id', '1')->value('title');                            
	// echo $title;                                                          вывод одной ячейки.

    // $titles = DB::table('posts')->pluck('title');
	// dump($titles);                                  вывод коллекции значчений одного столбца.

    // $titles = DB::table('posts')
	// 	->where('id', '>', '3')
	// 	->pluck('title');                    вывод коллекции значений, поппадающих под условие, одного столбца.     
	// dump($titles);

    // $posts = DB::table('posts')
	// 	->whereBetween('likes', [1, 100])                     проверяет, что знаяение столбца находится в указанном интервале.
	// 	->get();
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->whereNotBetween('likes', [1, 100])
	// 	->get();                                        проверяет, что значение столбца не находится в указанном интервале.
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->whereIn('id', [1, 2, 3])
	// 	->get();                                проверяет содержатся ли значения стобца в указанном массиве.
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->whereNotIn('id', [1, 2, 3])
	// 	->get();                                проверяет, чтобы значение столбца не содержалось в указанном массиве. 
    // dump($posts)

    // $posts = DB::table('posts')
	// 	->whereNull('updated_at')
	// 	->get();                                ролверка на NULL.
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->whereNotNull('updated_at')
	// 	->get();                                проверка на NotNULL.
	// dump($posts);

    // $post = DB::table('posts')
	// 	->whereId(1)
	// 	->get();                                Динамические условия, после "where" пишется имя поля таблицы.
	// dump($post);


    // $post = DB::table('posts')
	// 	->whereIdAndSlug(1, 'my-page')
	// 	->first();                              Комбинированное динамическое условие. Через "And"   (и)
	// dump($post);

//    $post = DB::table('posts')
// 		->whereIdOrSlug(1, 'my-page')               Комбинированное динамическое условие. Через "Or" (или)
// 		->first();
// 	dump($post);


    // $posts = DB::table('posts')
	// 	->orderBy('likes', 'asc'/'desc')         
	// 	->get();                                Сортировка по заданному столбцу через "orderBy".
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->latest('date'//указание поля сортировки)                          сортировка по убыванию даты, по возрастанию (->oldest)
	// 	->get();                        
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->inRandomOrder()                           для рандомной сортировки 
	// 	->get();                                    получаем все посты и отсортируем в рандомном порядке
	// dump($posts);

    // $post = DB::table('posts')
	// 	->inRandomOrder()           для рандомной сортировки
	// 	->first();                  получаем один случайный  пост.
	// dump($post);

    // $posts = DB::table('posts')
	// 	->take(5)                               позволяет задать количество получаемых записей. Например 5
	// 	->get();
	// dump($posts);

    // $posts = DB::table('posts')
	// 	->skip(3)                               пропускает первые три записи.  Используется обязательно с "take".
	// 	->take(5)                       
	// 	->get();
	// dump($posts);

    


    public function Test()
    {
        $posts = DB::table("post")->get();
        return view("post.test", ['posts' => $posts]);
    }
}
