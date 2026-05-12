<?php

namespace App\Http\Controllers;

use Fruitcake\LaravelDebugbar\Twig\Extension\Dump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    #Подключение фасада DB
use PDO;
use App\Models\Post;

class praktika10 extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view('posts', compact('posts'));
    }
}
