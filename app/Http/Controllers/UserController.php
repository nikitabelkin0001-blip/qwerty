<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{
    public function show(){
        return view('post.show', [
            'title'=>'eltiT',
            'slot'=>'tols'
        ]);
        
    }
    public function all(){
        return view('user.text', ['text'=>'blop']);
    }
    public function name(){
        return view('user.names', ['names'=>'Vasya']);
    }
    public function surname(){
        return 'Surname?';
    }
}
