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

    

    public function Test()
    {
        $posts = DB::table("post")->get();
        return view("post.test", ['posts' => $posts]);
    }
}
