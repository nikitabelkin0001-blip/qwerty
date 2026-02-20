<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public function Names()
    {
        return view(
            'post.layout',
            [
                'href' => 'google.com',
                'textLink' => 'Нажми на меня',
                'input' => 'Alexandr',
                'class' => 'color:red',
                'name' => 'names',
                'age' => 'ages',
                'salary' => 'salarys'
            ]
        );
    }
    public function Worker()
    {
        $worker = [
            ['name' => 'Kirill', 'age' => '24 year', 'salary' => 'salary: 1000$'],
            ['name' => 'Evgenij', 'age' => '91 year', 'salary' => 'salary: 10$'],
            ['name' => 'Nikita', 'age' => '20 year', 'salary' => 'salary: 1000$']
        ];
        return view('post.show', ['worker' => $worker]);
    }
    public function City($city = 'Москва')
    {
        return view('post.city', ['city' => $city]);
    }
    public function Location()
    {
        $location =
            [
                [
                    'country' => 'Китай',
                    'city' => 'Омск'
                ],
                [
                    'city' => 'Томск'
                ],
                [
                    'country' => 'Румыния',
                ]
            ];
        return view('post.location', ['location' => $location]);
    }
    public function Time11($year, $month, $day)
    {
        return view('post.time', ['month' => $month, 'day' => $day]);
    }
    public function Text($text = '<b>text</b>')
    {
        return view('post.text', ['text' => $text]);
    }
    public function Text18($age = 17)
    {
        return view('post.text18', ['age' => $age]);
    }
    public function TextY($age)
    {
        return view('post.texty', ['age' => $age]);
    }
    public function Mass1()
    {
        $mass =
            [
                1,
                2,
                3,
                4
            ];
        return view('post.mass', ['mass' => $mass]);
    }
    public function Mass2()
    {
        $mass =
            [
                1,
                2,
                3,
                4
            ];
        return view('post.mass2', ['mass' => $mass]);
    }
    public function Str1()
    {
        $str1 = [
            1 => 'asdasd',
            2 => 'apojpp',
            3 => 'pjozxa'
        ];
        return view('post.str1', ['str1' => $str1]);
    }
    public function Numbers()
    {
        $mass = [
            1,
            2,
            3,
            4,
            5,
            6,
            10
        ];
        return view('post.numbers', ['mass' => $mass]);
    }
    public function Mass3()
    {
        $mass = [
            1,
            2,
            3,
            4,
            5,
            6
        ];
        return view('post.mass3', ['mass' => $mass]);
    }
    public function Mass4()
    {
        $mass = [
            [
                2,
                3,
                4,
                5
            ],
            [
                1,
                3,
                5,
                7
            ]
        ];
        return view('post.mass4', ['mass' => $mass]);
    }
    public function Empoyes()
    {
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ]
        ];
        return view('post.empoyes', ['empoyes' => $employees]);
    }
    public function Name()
    {
        $mass = [
            'Petya',
            'Kirill',
            'Aktan',
            'Igor'
        ];
        return view('post.name', ['mass' => $mass]);
    }
}
