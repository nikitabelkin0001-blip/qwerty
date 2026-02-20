<?php

namespace App\Http\Controllers;

class PostController 
{
    public function show($id){
        $post = [
            1=> 'text 1',
            2=> 'text 2',
            3=> 'text 3',
            4=> 'text 4',
            5=> 'text 5',
        ];
        return view('post.show'/*, ['var1'=>'1', 'var2'=>'2']*/); 
        // $post[$id];
    }

}
