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
Route::get('Test6', [TestController::class, 'Test6']);
