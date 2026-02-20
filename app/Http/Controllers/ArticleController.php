<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController
{
    public function namesurname(){
        return view('article.neme', ['name'=> 'Nikita', 'surname'=>'Belkin']);
    }
}
