<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    #Подключение фасада DB
use PDO;

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

	// DB::table('posts')->insert([
	// 	'title' => 'page',              Вставка данных в таблицу.
	// 	'slug'  => 'slug',
	// ]);

	// $id = DB::table('posts')->insertGetId([
	// 	'title' => 'page',
	// 	'slug'  => 'slug',                  получение id вставленной записи.
	// ]);
	// echo $id;




	public function Test()
	{
		$users = DB::table('users')->get();
		dd($users);
	}

	public function Test2()
	{
		$post = DB::table('post')->get();
		foreach ($post as $p) {
			dump($p);
		}
	}

	public function Test3()
	{
		$post = DB::table('post')->get();
		return view('post.test3', ['post' => $post]);
	}

	public function Test4()
	{
		DB::enableQueryLog();
		$post = DB::table('post')->where('id', '!=', 3)->get();
		dump(DB::getQueryLog());
		return view('post.test4', ['post' => $post]);
	}

	public function Test6()
	{
		$post = DB::table('user')->select('name', 'email as users_email')->get();
		dump($post);
	}

	public function Test8()
	{
		$post = DB::table('user')->where('age', '=', 30)->get();
		dump($post);
	}

	public function Test9()
	{
		$post = DB::table('user')->where('age', '!=', 30)->get();
		dump($post);
	}

	public function Test10()
	{
		$post = DB::table('user')->where('age', '>', 30)->get();
		dump($post);
	}

	public function Test11()
	{
		$post = DB::table('user')->where('age', '<', 30)->get();
		dump($post);
	}

	public function Test12()
	{
		$post = DB::table('user')->where('age', '<=', 30)->get();
		dump($post);
	}

	public function Test13()
	{
		$post = DB::table('user')->whereBetween('age', [20, 30])->get();
		dump($post);
	}

	public function Test14()
	{
		$post = DB::table('user')->where('age', '=', 30)->orWhere('id', '>', 4)->get();
		dump($post);
	}

	public function Test15()
	{
		$post = DB::table('user')->where('age', '=', 30)->orWhere('id', '>', 4)->orWhere('salary', '=', 500)->get();
		dump($post);
	}

	public function Test16()
	{
		$post = DB::table('user')->whereBetween('age', [20, 30])->orWhere('salary', '=', 500)->get();
		dump($post);
	}

	public function Test17()
	{
		$post = DB::table('user')->whereBetween('age', [20, 30])->orWhereBetween('salary', [400, 800])->get();
		dump($post);
	}

	public function Test18()
	{
		$post = DB::table('user')->where('id', '=', 2)->get();
		dump($post);
	}

	public function Test19()
	{
		$post = DB::table('user')->where('id', '=', 2)->get();
		return view('post.test19', ['post' => $post]);
	}

	public function Test20()
	{
		$post = DB::table('user')->where('id', '=', 2)->select('email')->get();
		dump($post);
	}

	public function Test21()
	{
		$post = DB::table('user')->where('id', '=', 2)->select('email')->get();
		return view('post.test21', ['post' => $post]);
	}

	public function Test22()
	{
		$post = DB::table('user')->pluck('name');
		dump($post);
	}

	public function Test23()
	{
		$post = DB::table('user')->pluck('name');
		return view('post.test23', ['post' => $post]);
	}

	public function Test24()
	{
		$post = DB::table('user')->whereBetween('age', [30, 40])->get();
		dump($post);
	}

	public function Test25()
	{
		$post = DB::table('user')->whereNotBetween('age', [30, 40])->get();
		dump($post);
	}

	public function Test26()
	{
		$post = DB::table('user')->whereBetween('id', [1, 5])->get();
		dump($post);
	}

	public function Test27()
	{
		$post = DB::table('user')->whereNotBetween('id', [1, 5])->get();
		dump($post);
	}

	public function Test28()
	{
		$post = DB::table('user')->where('id', 1)->get();
		dump($post);
	}

	public function Test29()
	{
		$post = DB::table('user')->whereName('Nikita')->get();
		dump($post);
	}

	public function Test30()
	{
		$post = DB::table('user')->whereEmail('asdasd@gmail.com')->get();
		dump($post);
	}

	public function Test31()
	{
		$post = DB::table('user')->whereIdAndAge(2, 19)->get();
		dump($post);
	}

	public function Test32()
	{
		$post = DB::table('user')->whereIdOrAge(2, 30)->get();
		dump($post);
	}

	public function Test33()
	{
		$post = DB::table('user')->select('name', 'age')->orderBy('age')->get();
		dump($post);
	}

	public function Test34()
	{
		$post = DB::table('user')->select('name', 'salary')->orderByDesc('salary')->get();
		dump($post);
	}

	public function Test37()
	{
		$post = DB::table('user')->select('name', 'salary', 'age')->where('age', '>=', 30)->orderBy('salary')->get();
		dump($post);
	}

	public function Test38()
	{
		$post = DB::table('user')->select('name', 'salary', 'age')->where('age', '>=', 30)->orderByDesc('salary')->get();
		dump($post);
	}

	public function Test40(){
		$post = DB::table('user')->inRandomOrder()->get();
		dump($post);
	}

	public function Test41(){
		$post = DB::table('user')->inRandomOrder()->first();
		dump($post);
	}

	public function Test42(){
		$post1 = DB::table('user')->whereBetween(age[20,30])->inRandomOrder()->get();
	}
}
