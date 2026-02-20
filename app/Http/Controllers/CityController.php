<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController
{
    public function city($name){
        $users = [
            'Никита'=>'Омск',
            'Полина'=>'Тюмень',
            'Александр'=>'Томск',
            'Олег'=>'Москва',
            'Игорь'=>'Оренбург',
        ];
        $city = $users[$name] ?? 'Такого имяни нет.';
        return $city;
    }
}
