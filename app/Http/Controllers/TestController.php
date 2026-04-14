<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    #Подключение фасада DB


class TestController extends Controller
{
    public function Test()
    {
        // $posts = DB::table("posts")->get();
        // foreach ($posts as $post){
        //     dump($post);          Вывод всех значений.
        // }

        // foreach ($posts as $post){
        //     dump($post->title );          Отдельный столбец.
        //     dump( $post->slug );
        // }

        $posts = DB::table("post")->get();
        return view("post.test", ['posts' => $posts]);
    }
}
