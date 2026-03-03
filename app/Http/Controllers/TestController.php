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
        ]); #Выовод значений изначальной коллекции, которых нет во второй.

        $diff->all();
        return view('post.test5', ['diff' => $diff]);
    }

    public function Test6()
    {
        $collection = collect(['a', 'b', 'a', 'c', 'b']);
        $collection->duplicates();
        return view('post.test6', ['collection' => $collection]); #Вывод повторяющихся элементов массива.
    }                    #duplicatesStrict()___________Этот метод имеет ту же сигнатуру, что и метод duplicates; однако, все значения сравниваются с использованием «жесткого» сравнения.

    public function Test7()
    {
        $collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);
        $filtered = $collection->except(['price', 'discount']);              #Возвращает все, кроме того, что указано: $collection->except(['price', 'discount']); 
        $filtered->all();
        return view('post.test7', ['filtered' => $filtered]);
    }

    public function Test8()
    {
        $collection = collect([1, 2, 3, 4]);
        $filtered = $collection->filter(function ($value, $key) {    #Условие
            return $value > 2;
        });
        $filtered->all(); #Выоыодит всё, что подходит под условие.
        return view('post.test8', ['filtered' => $filtered]);
    }

    public function Test9()
    {
        $a = collect([1, 2, 3, 4])->first(function ($value, $key) {               #Условие
            return $value > 2;    #Выводит только первый элемент подходящий по условию.
        });
        return view('post.test9', ['a' => $a]);
        // 
        // Вы также можете вызвать метод first без аргументов, чтобы получить первый элемент из коллекции. Если коллекция пуста, возвращается null
    }

    public function Test10()
    {
        $collection = collect([
            ['name' => 'Sally'],
            ['school' => 'Arkansas'],
            ['age' => 28]
        ]);
        $flattened = $collection->flatMap(function ($values) {
            return array_map('strtoupper', $values);
        });
        $flattened->all();
        return view('post.test10', ['flattened' => $flattened]);             #Выводит коллекцию с применёнными изменениями
    }

    public function Test11()
    {
        $collection = collect([
            'name' => 'taylor',
            'languages' =>
                [
                    'php',
                    'javascript'
                ]
        ]);
        $flattened = $collection->flatten();
        $flattened->all();
        return view('post.test11', ['flattened' => $flattened]);             #Объеденяет многомерную коллекцию в одномерную.
    }

    public function Test12()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $flipped = $collection->flip();
        $flipped->all();
        return view('post.test12', ['flipped' => $flipped]);         #Меняет местами ключ и значение.
    }

    public function Test13()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $collection->forget('name');
        $collection->all();
        return view('post.test13', ['collection' => $collection]);   #Удаляет элемент по ключу.
    }

    public function Test14()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $chunk = $collection->forPage(2, 3);
        $chunk->all();
        return view('post.test14', ['chunk' => $chunk]); #Разбивает коллекцию на части по 3 штуки, и размещает на каждую "страницу" по три элемента коллекции.   Page: 2 - С какой страницы начинать просмотр. perPage: 3 - по сколько элементов содержит одна "страница".
    }

    public function Test15()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $value = $collection->get('name');
        return view('post.test15', ['value'=>$value]);          #Выводит только элемент, ключ которого указан в "get".
    }
}
