<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return '!!!';
});


Route::get('/test', function(){
   return dd('user');
});

Route::get('/dirt/test', function(){
    return dump('users');
});

Route::get ('/user/{surname}/{name}', function ($surname, $name){
    return 'user:'.' '.$surname.' '.$name;
})->whereAlpha('surname', '[a-z]+')->whereAlpha('name', '[a-z]+');


Route::get ('/sity/{sity?}', function($sity = 'Omsk'){
    return 'Sity'.' '.$sity;
});

Route::get('/user/{id?}', function($id = 0){
    return 'id: '.$id;
})->whereAlphaNumeric('id', '[0-9]+');

Route::get ('/user/{id}/{name}', function($id=0, $name = 'nikita'){
    return 'user: '.$id.' '.$name;
})->whereAlphaNumeric('id', '[0]+')->where('name', '[a-z]{2,}');

Route::get('/post/{date}', function($date){
    return $date;
})->where('date', '[0-9]{1,4}-[0-9]{1,2}-[0-9]{1,2}');

Route::get ('/{year}/{month}/{day}', function($year, $month, $day){
    return $year.':'.$month.':'.$day;
})->where('year', '[1-9]{1,4}')->where('month', '[0-9]{1,2}')->where('day', '[0-9]{1,2}');

Route::get('/users/{order}', function($order){
    return $order;
})->where('order', '[0-9A-Za-z]+');

Route::get('/city/{name}', function($name){
    return $name;
})->where('name', expression: '[a-zA-Z-_]+');

// Задание 13
Route::get('/user/{id}', function ($id) {
	return $id;
});
Route::get('/user/all', function () {
	return 'all';
});

//Задание 14
Route::get('/user/{id?}', function ($id = null) {
		return $id;
	});
	Route::get('/user', function () {
		return 'user';
	});
	Route::get('/user/all', function () {
		return 'all';
	});

// Задание 15

Route::get('/user/{slug}', function ($slug) {
		return $slug;
	})->where('slug', '[a-z0-9_-]+');
	Route::get('/user/{id}', function ($id) {
		return $id;
	})->where('id', '[0-9]+');

// Задание 16
Route::get('/admin/users', function () {
		return 'all';
	});
	Route::get('/admin/user/{id}', function ($id) {
		return $id;
	});

// Задание 17
Route::get('/user/{profile}', function ($profile) {
		return $profile;
	});







// Практика 3
Route::get('/post/{id}', [PostController::class, 'show']);

//Задание 1-2
Route::get('/users', [UserController::class, 'show']);

//Задание 3
Route::get('/userss/all', [UserController::class, 'all']);

//Задание 6
Route::get('/userss/names', [UserController::class, 'name']);

//Задание 7
Route::get('/users/{surname}/{name}', [UserController::class, 'surname']);

//Задание 8
Route::get('/usert/{name}', [CityController::class, 'city']);


// Практика 4
//Задание 1-3
Route::get('/article', [ArticleController::class, 'namesurname']);


//Практика 5
//Теория
Route::get('/Test', [TestController::class, 'Names']);
Route::get('/Worker', [TestController::class, 'Worker']);
//Задание 9
Route::get('/Test2/{City?}', [TestController::class, 'City']);
Route::get('Test3', [TestController::class, 'Location']);
Route::get('/Test4/{year}/{month}/{day}', [TestController::class, 'Time11'])->where('year','[0-9]{4}')->where('month', '[0-9]{1,2}')->where('day','[0-9]{1,2}');
Route::get('/Test5/{text?}', [TestController::class, 'Text']);
Route::get('Text18/{age?}', [TestController::class, 'Text18']);
Route::get('TextY/{age?}', [TestController::class, 'TextY']);
Route::get('Mass1', [TestController::class, 'Mass1']);
Route::get('Mass2', [TestController::class, 'Mass2']);
Route::get('Str1', [TestController::class, 'Str1']);
Route::get('Numbers', [TestController::class, 'Numbers']);
Route::get('Mass3', [TestController::class, 'Mass3']);
Route::get('Mass4', [TestController::class, 'Mass4']);
Route::get('Empoyes', [TestController::class, 'Empoyes']);
Route::get('NameN', [TestController::class, 'Name']);