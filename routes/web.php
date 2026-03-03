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

Route::get('Test', [TestController::class, 'Test']);
Route::get('Test2', [TestController::class, 'Test2']);
Route::get('Test3', [TestController::class, 'Test3']);
Route::get('Test4', [TestController::class, 'Test4']);
Route::get('Test5', [TestController::class, 'Test5']);
Route::get('Test6', [TestController::class, 'Test6']);
Route::get('Test7', [TestController::class, 'Test7']);
Route::get('Test8', [TestController::class, 'Test8']);
Route::get('Test9', [TestController::class, 'Test9']);
Route::get('Test10', [TestController::class, 'Test10']);
Route::get('Test11', [TestController::class, 'Test11']);
Route::get('Test12', [TestController::class, 'Test12']);
Route::get('Test13', [TestController::class, 'Test13']);
Route::get('Test14', [TestController::class, 'Test14']);
Route::get('Test15', [TestController::class, 'Test15']);
