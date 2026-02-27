<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public function Test()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $chunks->all();
        return view('post.test', ['chunks' => $chunks]);
    }

    public function Test2()
    {
        $collection = collect(['name', 'age']);
        $combined = $collection->combine(['George', 29]);
        $combined->all();
        return view('post.test2', ['combined' => $combined]);
    }

    public function Test3()
    {
        $collection = collect(['John Doe']);
        $concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
        $concatenated->all();
        return view('post.test3', ['concatenated' => $concatenated]);
    }

    public function Test4()
    {
        $collection = collect([1, 2, 2, 2, 3]);
        $counted = $collection->countBy();
        $counted->all();
        return view('post.test4', ['counted' => $counted]);
    }

    public function Test5()
    {
        $collection = collect([
            'color' => 'orange',
            'type' => 'fruit',
            'remain' => 6,
        ]);

        $diff = $collection->diffAssoc([
            'color' => 'yellow',
            'type' => 'fruit',
            'remain' => 3,
            'used' => 6,
        ]);

        $diff->all();
        return view('post.test5', ['diff'=>$diff]);
    }
}
